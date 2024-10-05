# Custom Admin Bar Control (CABC)
## Description
CABC is a lightweight plugin designed to integrate with Super Page Cache, hiding the admin bar for all URLs except those with the ?swcfpc=1 parameter. This enables you to use Cloudflare's "Cache Everything" feature hassle-free and for free!

## Features
- hide the admin bar for all URLs and users (logged-in or logged-out) but the ones having ?swcfpc=1 parameter (Super Page Cache's cache buster).
- Compatibility with Cloudflare's "Cache Everything" rule.
- No Settings (for now). just activate and enjoy speeding up your WordPress website with Cloudflare's "Cache Everything" feature, for Free!

## Installation
1. Download the plugin and upload it to your `/wp-content/plugins/` directory.

2. Activate the plugin through the 'Plugins' menu in WordPress.

3. Be sure to set a Cloudflare page rule to bypass cache for URLs ending with `?swcfpc=1`. Here's how to do it:

    3.1 Login to your Cloudflare dashboard.

    3.2 Go to the Page Rules section (Rules > Page Rules).

    3.3 Click **Create Page Rule**.

    3.4 Fill in the required parameters:
    - **URL**: `*YOUR_DOMAIN.com/*?swcfpc=1` (replace `YOUR_DOMAIN` with your actual domain).
    - **Cache Level**: Bypass
    - **Position**: First
    
    3.5 Save Page Rule and Deploy.

This way, You can use the Cache Everything feature of Cloudflare by setting another page rule like this:
  URL: *YOUR_DOMAIN.com/*
  Cache Level: Cache Everything
  Edge Cache TTL: a month (optional)
  Position: Last

Now all you need to do is purge Cloudflare cache and then search you domain name with `*?swcfpc=1` at the end like: `*YOUR_DOMAIN.com/*?swcfpc=1` 
And you will see your site with admin bar, without it getting cached!

## FAQ

**Q: Is this plugin lightweight? Will it affect my server's performance?**

A: Yes, CABC is lightweight and doesn't affect server performance. It only controls the admin bar visibility based on specific URL parameters.

**Q: What is `?swcfpc=1` and how does it work?**

A: The `?swcfpc=1` parameter is a cache buster for Super Page Cache plugin that bypasses Cloudflare's cache sent from server. When logged in, it ensures that pages are served uncached. In our plugin, it also controls when the admin bar is shown.

**Q: Do I need to configure anything in the plugin?**

A: No. The plugin has no settings for now. Just activate it and ensure you've set the necessary Cloudflare page rule for `?swcfpc=1`.

## License
MIT License
