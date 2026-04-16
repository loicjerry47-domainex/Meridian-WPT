import { Download } from 'lucide-react';

export default function App() {
  return (
    <div className="min-h-screen bg-[#fafafa] text-[#1a1a2e] font-sans flex items-center justify-center p-4">
      <div className="max-w-md w-full bg-white rounded-[12px] shadow-[0_20px_40px_rgba(0,0,0,0.1)] border border-[#e5e7eb] overflow-hidden flex flex-col relative z-2">
        <div className="p-10 text-center flex flex-col items-center">
          <div className="w-16 h-16 bg-gradient-to-br from-[#6366f1] to-[#8b5cf6] rounded-[8px] flex items-center justify-center mb-6 shadow-sm">
            <Download className="w-8 h-8 text-white" />
          </div>
          
          <h1 className="text-[28px] font-[800] text-[#111827] tracking-[-1px] leading-[1.1] mb-6">
            Meridian WP Theme
          </h1>
          
          <p className="text-[16px] leading-[1.6] text-[#4b5563] mb-8">
            Your production-ready WordPress theme setup is complete. Click below to download the compiled .zip file ready for installation.
          </p>
          
          <a
            href="/api/download-theme"
            className="w-full flex items-center justify-center gap-2 bg-[#6366f1] text-white font-[600] text-[14px] py-[14px] px-[28px] rounded-[8px] transition-opacity duration-200 hover:opacity-90 border-none cursor-pointer"
          >
            <Download className="w-5 h-5" />
            Download meridian.zip
          </a>
        </div>
      </div>
    </div>
  );
}
