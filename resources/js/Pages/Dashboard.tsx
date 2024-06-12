
import MetaTags from "@/Components/Meta/MetaTags";
import { ContentLayout } from "@/Layouts/ContentLayout";
import DashboardLayout from "@/Layouts/DashboardLayout";
import { type PageProps } from "@/types";

export default function Dashboard({ auth }: PageProps) {
  return (
    <>
      <MetaTags title="Dashboard" />
      <DashboardLayout>
        <ContentLayout title="Dashboard" user={auth.user}>
          <div className="border bg-card text-card-foreground shadow rounded-lg border-none">
            <div className="p-6">
              <div className="flex justify-center items-center min-h-[calc(100vh-56px-56px-64px-48px)]">
                You're Logged In!
              </div>
            </div>
          </div>
        </ContentLayout>
      </DashboardLayout>
    </>
  );
}
