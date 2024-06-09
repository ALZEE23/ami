import UserNav from "./UserNav"

type NavBarProps = {
  title: string
}

export default function NavBar({ title }: NavBarProps) {
  return (
    <header className="sticky top-0 z-10 w-full bg-background/95 shadow backdrop-blur supports-[backdrop-filter]:bg-background/60 dark:shadow-secondary">
      <div className="mx-4 sm:mx-8 flex h-14 items-center">
        <div className="flex items-center gap-x-4 lg:gap-x-0">
          <h1 className="font-bold">{title}</h1>
        </div>
        <div className="flex flex-1 items-center gap-x-2 justify-end">
          <UserNav />
        </div>
      </div>
    </header>
  )
}
