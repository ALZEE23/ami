import { type User } from "@/types";
import { type PropsWithChildren } from "react";

import NavBar from "@/Components/NavBar";

export function ContentLayout({ title, user, children }: PropsWithChildren<{ title: string, user: User }>) {
  return (
    <>
      <NavBar title={title} user={user} />
      <div className="container py-8 px-4 sm:px-8">
        {children}
      </div>
    </>
  );
}
