import LoginForm from '@/Components/LoginForm';
import AuthLayout from '@/Layouts/AuthLayout';
import { Head, useForm } from '@inertiajs/react';
import { FormEventHandler, useEffect } from 'react';

export default function Login({ status, canResetPassword }: { status?: string, canResetPassword: boolean }) {
  const { data, setData, post, processing, errors, reset } = useForm({
    email: '',
    password: '',
    remember: false,
  });

  useEffect(() => {
    return () => {
      reset('password');
    };
  }, []);

  const submit: FormEventHandler = (e) => {
    e.preventDefault();

    post(route('login'));
  };

  return (
    <>
      <Head title="Log in" />
      <AuthLayout>
        <div className="flex flex-col gap-2 text-center">
          <h1 className="text-2xl font-semibold tracking-tight">Selamat Datang Kembali</h1>
          <p className="text-sm text-muted-foreground">Silahkan login ke akun anda</p>
        </div>
        <LoginForm />
      </AuthLayout>
    </>
  );
}
