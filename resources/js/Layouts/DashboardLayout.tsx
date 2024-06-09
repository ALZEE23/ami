import Sidebar from "@/Components/Sidebar";
import { useSidebarToggle } from "@/hooks/use-sidebar-toggle";
import { cn } from "@/lib/utils";
import { type PropsWithChildren } from "react";
import { useStore } from "zustand";

export default function DashboardLayout({ children }: PropsWithChildren) {
  const sidebar = useStore(useSidebarToggle, (state) => state);

  if (!sidebar) return null;

  return (
    <>
      <Sidebar />
      <main
        className={cn(
          "min-h-[100vh_-_56px] bg-zinc-50 transition-[margin-left] duration-300 ease-in-out dark:bg-zinc-900 lg:ml-72",
          sidebar.isOpen === false ? "lg:ml-[90px]" : "lg:ml-72",
        )}
      >
        {children}
      </main>
      <footer
        className={cn(
          "transition-[margin-left] duration-300 ease-in-out",
          sidebar?.isOpen === false ? "lg:ml-[90px]" : "lg:ml-72",
        )}
      >
        Test Footer
      </footer>
    </>
  );
}
