import LoginForm from "@/Components/Form/LoginForm";
import AuthLayout from "@/Layouts/AuthLayout";
import { Head } from "@inertiajs/react";

export default function Login() {
  return (
    <>
      <Head title="Log in" />
      <AuthLayout>
        <div className="flex flex-col gap-2 text-center">
          <h1 className="text-2xl font-semibold tracking-tight">
            Selamat Datang Kembali
          </h1>
          <p className="text-sm text-muted-foreground">
            Silahkan login ke akun anda
          </p>
        </div>
        <LoginForm />
      </AuthLayout>
    </>
  );
}
