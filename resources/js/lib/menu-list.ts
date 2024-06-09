import {
  BookMarked,
  CircleFadingPlus,
  FileText,
  Layers,
  LayoutDashboard,
  Lightbulb,
  Settings,
  Users,
  type LucideIcon,
} from "lucide-react";

type SubMenu = {
  href: string;
  label: string;
  active: boolean;
  submenus?: SubMenu[];
};

type Menu = {
  href: string;
  label: string;
  active: boolean;
  icon: LucideIcon;
  submenus: SubMenu[];
};

type Group = {
  groupLabel: string;
  menus: Menu[];
};

export function getMenuList(pathname: string): Group[] {
  return [
    {
      groupLabel: "",
      menus: [
        {
          href: "/",
          label: "Dashboard",
          active: pathname.includes("/dashboard"),
          icon: LayoutDashboard,
          submenus: [],
        },
      ],
    },
    {
      groupLabel: "Konten",
      menus: [
        {
          href: "/permasalahan",
          label: "Permasalahan dan Kebutuhan",
          active: pathname.includes("/permasalahan"),
          icon: Layers,
          submenus: [],
        },
        {
          href: "/inovasi",
          label: "Inovasi",
          active: pathname.includes("/inovasi"),
          icon: Lightbulb,
          submenus: [],
        },
        {
          href: "",
          label: "Form",
          active: pathname.includes("/form"),
          icon: FileText,
          submenus: [
            {
              href: "/form/rpjmd",
              label: "Pemetaan RPJMD",
              active: pathname === "/form/rpjmd",
            },
            {
              href: "/form/masa-depan",
              label: "Analisis Masa Depan",
              active: pathname === "/form/masa-depan",
            },
            {
              href: "/form/kesiapan",
              label: "Analisis Kesiapan",
              active: pathname === "/form/kesiapan",
            },
            {
              href: "/form/kesenjangan",
              label: "Analisis Kesenjangan",
              active: pathname === "/form/kesenjangan",
            },
            {
              href: "/form/kesenjangan",
              label: "Analisis Kesenjangan",
              active: pathname === "/form/kesenjangan",
            },
            {
              href: "/form/gap-indikator-rpjmd",
              label: "GAP Indikator RPJMD",
              active: pathname === "/form/gap-indikator-rpjmd",
            },
            {
              href: "/form/swot",
              label: "Analisis SWOT/TOWS",
              active: pathname === "/form/swot",
            },
            {
              href: "/form/sasaran-pembangunan",
              label: "Sasaran Pembangunan",
              active: pathname === "/form/sasaran-pembangunan",
            },
            {
              href: "/form/inventaris-inovasi-aplikasi",
              label: "Inventaris Inovasi/Aplikasi",
              active: pathname === "/form/inventaris-inovasi-aplikasi",
            },
            {
              href: "/form/smart-inisiatif",
              label: "Smart Inisiatif",
              active: pathname === "/form/smart-inisiatif",
            },
            {
              href: "/form/rencana-aksi",
              label: "Rencana Aksi",
              active: pathname === "/form/rencana-aksi",
            },
            {
              href: "",
              label: "Peta Jalan",
              active: pathname === "/form/peta-jalan",
              submenus: [
                {
                  href: "/form/peta-jalan/pendek",
                  label: "Jangka Pendek",
                  active: pathname === "/form/peta-jalan/pendek",
                },
                {
                  href: "/form/peta-jalan/menengah",
                  label: "Jangka Menengah",
                  active: pathname === "/form/peta-jalan/menengah",
                },
                {
                  href: "/form/peta-jalan/panjang",
                  label: "Jangka Panjang",
                  active: pathname === "/form/peta-jalan/panjang",
                },
              ],
            },
            {
              href: "/form/resiko",
              label: "Manajemen Resiko",
              active: pathname === "/form/resiko",
            },
          ],
        },
        {
          href: "",
          label: "Rekap",
          active: pathname.includes("/rekap"),
          icon: BookMarked,
          submenus: [
            {
              href: "/rekap/rpjmd",
              label: "Pemetaan RPJMD",
              active: pathname === "/rekap/rpjmd",
            },
            {
              href: "/rekap/masa-depan",
              label: "Analisis Masa Depan",
              active: pathname === "/rekap/masa-depan",
            },
            {
              href: "/rekap/kesiapan",
              label: "Analisis Kesiapan",
              active: pathname === "/rekap/kesiapan",
            },
            {
              href: "/rekap/kesenjangan",
              label: "Analisis Kesenjangan",
              active: pathname === "/rekap/kesenjangan",
            },
            {
              href: "/rekap/kesenjangan",
              label: "Analisis Kesenjangan",
              active: pathname === "/rekap/kesenjangan",
            },
            {
              href: "/rekap/gap-indikator-rpjmd",
              label: "GAP Indikator RPJMD",
              active: pathname === "/rekap/gap-indikator-rpjmd",
            },
            {
              href: "/rekap/swot",
              label: "Analisis SWOT/TOWS",
              active: pathname === "/rekap/swot",
            },
            {
              href: "/rekap/sasaran-pembangunan",
              label: "Sasaran Pembangunan",
              active: pathname === "/rekap/sasaran-pembangunan",
            },
            {
              href: "/rekap/inventaris-inovasi-aplikasi",
              label: "Inventaris Inovasi/Aplikasi",
              active: pathname === "/rekap/inventaris-inovasi-aplikasi",
            },
            {
              href: "/rekap/smart-inisiatif",
              label: "Smart Inisiatif",
              active: pathname === "/rekap/smart-inisiatif",
            },
            {
              href: "/rekap/rencana-aksi",
              label: "Rencana Aksi",
              active: pathname === "/rekap/rencana-aksi",
            },
            {
              href: "",
              label: "Peta Jalan",
              active: pathname === "/rekap/peta-jalan",
              submenus: [
                {
                  href: "/rekap/peta-jalan/pendek",
                  label: "Jangka Pendek",
                  active: pathname === "/rekap/peta-jalan/pendek",
                },
                {
                  href: "/rekap/peta-jalan/menengah",
                  label: "Jangka Menengah",
                  active: pathname === "/rekap/peta-jalan/menengah",
                },
                {
                  href: "/rekap/peta-jalan/panjang",
                  label: "Jangka Panjang",
                  active: pathname === "/rekap/peta-jalan/panjang",
                },
              ],
            },
            {
              href: "/rekap/resiko",
              label: "Manajemen Resiko",
              active: pathname === "/rekap/resiko",
            },
          ],
        },
      ],
    },
    {
      groupLabel: "Settings",
      menus: [
        {
          href: "",
          label: "Konten",
          active: pathname.includes("/konten"),
          icon: CircleFadingPlus,
          submenus: [
            {
              href: "/konten/enumeration",
              label: "Enumeration",
              active: pathname.includes("/konten/enumeration"),
            },
            {
              href: "/konten/pertanyaan",
              label: "Pertanyaan",
              active: pathname.includes("/konten/pertanyaan"),
            },
          ],
        },
        {
          href: "/users",
          label: "Users",
          active: pathname.includes("/users"),
          icon: Users,
          submenus: [],
        },
        {
          href: "/aplikasi",
          label: "Aplikasi",
          active: pathname.includes("/aplikasi"),
          icon: Settings,
          submenus: [],
        },
      ],
    },
  ];
}
