import NavBar from "@/Components/NavBar";
import { type User } from "@/types";
import { type PropsWithChildren } from "react";

export function ContentLayout({ title, user, children }: PropsWithChildren<{ title: string, user: User }>) {
  return (
    <div>
      <NavBar title={title} user={user} />
      <div className="container pt-8 pb-8 px-4 sm:px-8">{children}</div>
    </div>
  );
}
