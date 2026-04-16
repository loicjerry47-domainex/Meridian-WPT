import express from 'express';
import { createServer as createViteServer } from 'vite';
import archiver from 'archiver';
import path from 'path';
import fs from 'fs';

async function startServer() {
  const app = express();
  const PORT = 3000;

  app.get('/api/health', (req, res) => {
    res.json({ status: 'ok' });
  });

  app.get('/api/download-theme', (req, res) => {
    const themeDir = path.join(process.cwd(), 'meridian');
    
    if (!fs.existsSync(themeDir)) {
      return res.status(404).json({ error: 'Theme files not yet generated.' });
    }

    res.attachment('meridian-theme.zip');
    
    const archive = archiver('zip', {
      zlib: { level: 9 }
    });

    archive.on('error', (err) => {
      res.status(500).send({ error: err.message });
    });

    archive.pipe(res);
    archive.directory(themeDir, 'meridian');
    archive.finalize();
  });

  if (process.env.NODE_ENV !== 'production') {
    const vite = await createViteServer({
      server: { middlewareMode: true },
      appType: 'spa',
    });
    app.use(vite.middlewares);
  } else {
    const distPath = path.join(process.cwd(), 'dist');
    app.use(express.static(distPath));
    app.get('*', (req, res) => {
      res.sendFile(path.join(distPath, 'index.html'));
    });
  }

  app.listen(PORT, '0.0.0.0', () => {
    console.log(`Server running on http://localhost:${PORT}`);
  });
}

startServer();
