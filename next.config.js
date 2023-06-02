/** @type {import('next').NextConfig} */
module.exports = {
  reactStrictMode: true,
  images: {
    domains: ["upcdn.io", "replicate.delivery"],
  },
  async redirects() {
    return [
      {
        source: "/b",
        destination: "/",
        permanent: false,
      },
      {
        source: "/a",
        destination: "/",
        permanent: false,
      },
    ];
  },
};
