import { Skeleton } from "@/Components/ui/skeleton";
import { PropsWithChildren, useState } from "react";

export default function AuthLayout({ children }: PropsWithChildren) {
  const [loaded, setLoaded] = useState(false);

  const handleImageLoad = () => {
    setLoaded(true);
  };

  return (
    <main className="container grid relative h-screen flex-col items-center justify-center lg:max-w-none lg:grid-cols-2 lg:px-0">
      <aside className="relative hidden h-full flex-col bg-muted p-10 text-white lg:flex dark:border-r">
        {!loaded && <Skeleton />}
        <img
          src={"https://www.tripsavvy.com/thmb/Qid6z3y2eiQra_FUtoMA64jK878=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/MountBatur4WEB-a3e94537b1794ce982c35ee144ec939d.jpg"}
          onLoad={handleImageLoad}
          className={`absolute inset-0 size-full ${loaded ? "block" : "hidden"}`}
        />
        <div className="bg-zinc-900/50 absolute inset-0 z-10"></div>
        <div className="relative z-20 flex items-center text-lg font-semibold">Aplikasi Manajemen Inovasi</div>
        <div className="relative z-20 mt-auto">
          <blockquote className="flex flex-col gap-2">
            <p className="text-lg">"Gunung Batur"</p>
            <footer className="text-sm">Bali, Kab. Bangli</footer>
          </blockquote>
        </div>
      </aside>
      <section className="lg:p-8">
        <div className="mx-auto flex w-full flex-col justify-center gap-y-6 sm:w-[350px]">
          {children}
        </div>
      </section>
    </main>
  )
}
