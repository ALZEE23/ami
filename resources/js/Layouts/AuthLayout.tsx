import { PropsWithChildren } from "react";

export default function AuthLayout({ children }: PropsWithChildren) {
  return (
    <main className="container relative hidden h-[800px] flex-col items-center justify-center md:grid lg:max-w-none lg:grid-cols-2 lg:px-0">
      <aside className="relative hidden h-full flex-col bg-muted p-10 text-white lg:flex dark:border-r">
        <div className="absolute inset-0 bg-zinc-900"></div>
      </aside>
      <section className="lg:p-8">
        <div className="mx-auto flex w-full flex-col justify-center gap-y-6 sm:w-[350px]">
          {children}
        </div>
      </section>
    </main>
  )
}
