import "../css/app.css";
import "./bootstrap";

import { createInertiaApp } from "@inertiajs/react";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { createRoot, hydrateRoot } from "react-dom/client";
import { ThemeProvider } from "./Providers/theme-provider";

// eslint-disable-next-line @typescript-eslint/no-floating-promises
createInertiaApp({
  resolve: (name) =>
    resolvePageComponent(
      `./Pages/${name}.tsx`,
      import.meta.glob("./Pages/**/*.tsx"),
    ),
  setup({ el, App, props }) {
    if (import.meta.env.DEV) {
      createRoot(el).render(
        <>
          <ThemeProvider defaultTheme="light" storageKey="vite-ui-theme">
            <App {...props} />
          </ThemeProvider >
        </>
      );
      return;
    }

    hydrateRoot(el,
      <>
        <ThemeProvider defaultTheme="light" storageKey="vite-ui-theme">
          <App {...props} />
        </ThemeProvider >
      </>
    );
  },
  progress: {
    color: "#4B5563",
  },
});
