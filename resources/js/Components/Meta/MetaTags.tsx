import { Head } from "@inertiajs/react";
import { useMemo } from "react";

type MetaTagsProps = {
  title?: string;
  description?: string;
  image?: string;
  url?: string;
}

export default function MetaTags({ title, description, image, url = (import.meta.env.VITE_APP_URL as string) }: MetaTagsProps) {
  const formattedTitle = useMemo(() => {
    const DEFAULT_TITLE = (import.meta.env.VITE_APP_NAME as string) || "Laravel"

    if (title) {
      return `${title} - ${DEFAULT_TITLE}`
    }

    return DEFAULT_TITLE
  }, [title])

  const DEFAULT_DESCRIPTION = ""
  const currentDescription = description ?? DEFAULT_DESCRIPTION

  const favicon = "/favicon.ico"

  return (
    <Head>
      <title>{formattedTitle}</title>
      <link rel="shortcut icon" href={favicon} type="image/x-icon" />
      <meta name="title" content={formattedTitle} />
      <meta name="description" content={currentDescription} />

      <meta
        name="keywords"
        content="ami, aplikasi manajemen inovasi, inovasi, manajemen, pemerintah"
      />
      <meta
        name="googlebot"
        content="index, explore, search, max-video-preview:-1, max-image-preview:large, max-snippet:-1"
      />
      <meta name="creator" content="ashtrath" />

      <meta property="og:type" content="website" />
      <meta property="og:url" content={url} />
      <meta property="og:title" content={formattedTitle} />
      <meta property="og:description" content={currentDescription} />
      {/* <meta property="og:image" content={image} /> */}

      <meta property="twitter:card" content="summary_large_image" />
      <meta property="twitter:url" content={url} />
      <meta property="twitter:title" content={formattedTitle} />
      <meta property="twitter:description" content={currentDescription} />
      {/* <meta property="twitter:image" content={image} /> */}
    </Head>
  )
}
