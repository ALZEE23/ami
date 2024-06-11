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
          active: route().current("dashboard"),
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
          active: route().current("permasalahan"),
          icon: Layers,
          submenus: [],
        },
        {
          href: "/inovasi",
          label: "Inovasi",
          active: route().current("inovasi"),
          icon: Lightbulb,
          submenus: [],
        },
        {
          href: "",
          label: "Form",
          active: route().current("form.*"),
          icon: FileText,
          submenus: [
            {
              href: "/form/rpjmd",
              label: "Pemetaan RPJMD",
              active: route().current("form.rpjmd"),
            },
            {
              href: "/form/masa-depan",
              label: "Analisis Masa Depan",
              active: route().current("form.masa-depan"),
            },
            {
              href: "/form/kesiapan",
              label: "Analisis Kesiapan",
              active: route().current("form.kesiapan"),
            },
            {
              href: "/form/kesenjangan",
              label: "Analisis Kesenjangan",
              active: route().current("form.kesenjangan"),
            },
            {
              href: "/form/gap-indikator-rpjmd",
              label: "GAP Indikator RPJMD",
              active: route().current("form.gap-indikator-rpjmd"),
            },
            {
              href: "/form/swot",
              label: "Analisis SWOT/TOWS",
              active: route().current("form.swot"),
            },
            {
              href: "/form/sasaran-pembangunan",
              label: "Sasaran Pembangunan",
              active: route().current("form.sasaran-pembangunan"),
            },
            {
              href: "/form/inventaris-inovasi-aplikasi",
              label: "Inventaris Inovasi/Aplikasi",
              active: route().current("form.inventaris-inovasi-aplikasi"),
            },
            {
              href: "/form/smart-inisiatif",
              label: "Smart Inisiatif",
              active: route().current("form.smart-inisiatif"),
            },
            {
              href: "/form/rencana-aksi",
              label: "Rencana Aksi",
              active: route().current("form.rencana-aksi"),
            },
            {
              href: "",
              label: "Peta Jalan",
              active: route().current("form.peta-jalan.*"),
              submenus: [
                {
                  href: "/form/peta-jalan/pendek",
                  label: "Jangka Pendek",
                  active: route().current("form.peta-jalan.pendek"),
                },
                {
                  href: "/form/peta-jalan/menengah",
                  label: "Jangka Menengah",
                  active: route().current("form.peta-jalan.menengah"),
                },
                {
                  href: "/form/peta-jalan/panjang",
                  label: "Jangka Panjang",
                  active: route().current("form.peta-jalan.panjang"),
                },
              ],
            },
            {
              href: "/form/resiko",
              label: "Manajemen Resiko",
              active: route().current("form.resiko"),
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
              active: route().current("rekap.rpjmd"),
            },
            {
              href: "/rekap/masa-depan",
              label: "Analisis Masa Depan",
              active: route().current("rekap.masa-depan"),
            },
            {
              href: "/rekap/kesiapan",
              label: "Analisis Kesiapan",
              active: route().current("rekap.kesiapan"),
            },
            {
              href: "/rekap/kesenjangan",
              label: "Analisis Kesenjangan",
              active: route().current("rekap.kesenjangan"),
            },
            {
              href: "/rekap/gap-indikator-rpjmd",
              label: "GAP Indikator RPJMD",
              active: route().current("rekap.gap-indikator-rpjmd"),
            },
            {
              href: "/rekap/swot",
              label: "Analisis SWOT/TOWS",
              active: route().current("rekap.swot"),
            },
            {
              href: "/rekap/sasaran-pembangunan",
              label: "Sasaran Pembangunan",
              active: route().current("rekap.sasaran-pembangunan"),
            },
            {
              href: "/rekap/inventaris-inovasi-aplikasi",
              label: "Inventaris Inovasi/Aplikasi",
              active: route().current("rekap.inventaris-inovasi-aplikasi"),
            },
            {
              href: "/rekap/smart-inisiatif",
              label: "Smart Inisiatif",
              active: route().current("rekap.smart-inisiatif"),
            },
            {
              href: "/rekap/rencana-aksi",
              label: "Rencana Aksi",
              active: route().current("rekap.rencana-aksi"),
            },
            {
              href: "",
              label: "Peta Jalan",
              active: route().current("rekap.peta-jalan.*"),
              submenus: [
                {
                  href: "/rekap/peta-jalan/pendek",
                  label: "Jangka Pendek",
                  active: route().current("rekap.peta-jalan.pendek"),
                },
                {
                  href: "/rekap/peta-jalan/menengah",
                  label: "Jangka Menengah",
                  active: route().current("rekap.peta-jalan.menengah"),
                },
                {
                  href: "/rekap/peta-jalan/panjang",
                  label: "Jangka Panjang",
                  active: route().current("rekap.peta-jalan.panjang"),
                },
              ],
            },
            {
              href: "/rekap/resiko",
              label: "Manajemen Resiko",
              active: route().current("rekap.resiko"),
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
