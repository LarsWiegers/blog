import { defineConfig } from 'vitepress'

// https://vitepress.dev/reference/site-config
export default defineConfig({
  title: "Lars Wiegers Personal Blog",
  description: "My personal website, where I speak about things that interest me.",
  themeConfig: {
    // https://vitepress.dev/reference/default-theme-config
    nav: [
      { text: 'Home', link: '/' },
      { text: 'Blog', link: '/blog' },
    ],

    sidebar: [
      {
        text: 'Blog',
        items: [
          { text: 'Overview', link: '/blog' },
          { text: 'What I learned after maintaining my first package for 8-months', link: '/blog/posts/What-I-learned-after-maintaining-my-first-package-for-8-months' },
          { text: 'I created my first php package and it was actually fun', link: '/blog/posts/i-created-my-first-php-package-and-it-was-actually-fun' },
          { text: 'What’s it like being a IT student & part time programmer', link: '/blog/posts/whats-its-like-being-a-student-and-part-time-programmer' }
        ]
      }
    ],

    socialLinks: [
      { icon: 'github', link: 'https://github.com/vuejs/vitepress' }
    ]
  }
})
