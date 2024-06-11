"use client";

import { cn } from "@/lib/utils";
import { useForm } from "@inertiajs/react";
import { LoaderCircle } from "lucide-react";
import { type HTMLAttributes, type SyntheticEvent, useEffect } from "react";

import InputError from "./InputError";
import { Button } from "./ui/button";
import { Checkbox } from "./ui/checkbox";
import { Input } from "./ui/input";
import { Label } from "./ui/label";

type LoginFormProps = HTMLAttributes<HTMLDivElement>;

export default function LoginForm({ className, ...props }: LoginFormProps) {
  const { data, setData, post, processing, errors, reset } = useForm({
    name: "",
    password: "",
    remember: false,
  });

  useEffect(() => {
    return () => {
      reset("password");
    };
  }, []);

  async function onSubmit(e: SyntheticEvent) {
    e.preventDefault();

    post(route("login"));
  }

  return (
    <div className={cn("grid gap-6", className)} {...props}>
      {status && (
        <div className="mb-4 text-sm font-medium text-green-600">{status}</div>
      )}
      <form onSubmit={onSubmit}>
        <div className="grid gap-4">
          <div className="grid gap-1">
            <Label className="sr-only" htmlFor="username">
              Username
            </Label>
            <Input
              id="username"
              name="name"
              placeholder="Username"
              type="text"
              autoCapitalize="none"
              autoComplete="username"
              autoCorrect="off"
              disabled={processing}
              value={data.name}
              onChange={(e) => setData("name", e.target.value)}
            />
            <InputError message={errors.name} className="mt-2" />
          </div>
          <div className="grid gap-1">
            <Label className="sr-only" htmlFor="password">
              Password
            </Label>
            <Input
              id="password"
              name="password"
              placeholder="Password"
              type="password"
              autoCapitalize="none"
              autoComplete="current-password"
              autoCorrect="off"
              disabled={processing}
              value={data.password}
              onChange={(e) => setData("password", e.target.value)}
            />
            <InputError message={errors.password} className="mt-2" />
          </div>
          <div className="flex items-center gap-x-2">
            <Checkbox
              id="remember"
              defaultChecked={data.remember}
              onCheckedChange={(e) => setData("remember", e as boolean)}
              required={false}
            />
            <label
              htmlFor="remember"
              className="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
            >
              Ingat Saya
            </label>
          </div>
          <Button disabled={processing}>
            {processing && (
              <LoaderCircle className="mr-2 size-4 animate-spin" />
            )}
            Log In
          </Button>
        </div>
      </form>
    </div>
  );
}
