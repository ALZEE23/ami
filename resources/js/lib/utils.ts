import { clsx, type ClassValue } from "clsx";
import { twMerge } from "tailwind-merge";

export function cn(...inputs: ClassValue[]) {
  return twMerge(clsx(inputs));
}

export function getUsernameAlias(username: string): string {
  const words = username.split(" ");

  if (words.length > 1) {
    return words.map((word) => word[0].toUpperCase()).join("");
  } else {
    return username.substring(0, 2).toUpperCase();
  }
}
