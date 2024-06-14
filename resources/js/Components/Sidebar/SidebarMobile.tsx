import { Link } from "@inertiajs/react";
import { MenuIcon, ScrollText } from "lucide-react";

import { Button } from "../ui/button";
import { Sheet, SheetContent, SheetHeader, SheetTrigger } from "../ui/sheet";
import SidebarMenu from "./SidebarMenu";

export function SidebarMobile() {
  return (
    <Sheet>
      <SheetTrigger className="lg:hidden" asChild>
        <Button className="h-8" variant="outline" size="icon">
          <MenuIcon size={20} />
        </Button>
      </SheetTrigger>
      <SheetContent className="sm:w-72 px-3 h-full flex flex-col" side="left">
        <SheetHeader>
          <Button
            className="flex justify-center items-center pb-2 pt-1"
            variant="link"
            asChild
          >
            <Link href="/" className="flex items-center gap-2">
              <ScrollText className="mr-1 h-6 w-6" />
              <h1 className="text-lg font-bold">AMI</h1>
            </Link>
          </Button>
        </SheetHeader>
        <SidebarMenu isOpen />
      </SheetContent>
    </Sheet>
  )
}
