# Sofidev Disable API 🦝💜

**Sofidev Disable API** is a lightweight WordPress plugin that disables the REST API for non-authenticated users. It ensures that only logged-in users can access the REST API, adding an extra layer of security to your WordPress site.

---

## Features
- Restricts access to the WordPress REST API for users who are not logged in.
- Displays an error message with an HTTP 401 status code when unauthenticated users attempt to access the API.
- Fully compatible with WordPress core and other plugins.

---

## Requirements
- WordPress 5.0 or later
- PHP 7.4 or later

---

## Installation

### Option 1: Download ZIP and Upload to WordPress
1. [Download the ZIP file](https://github.com/SofiDevO/sofi-disableWP-api/raw/main/sofi-disableWP-api.zip).
2. Log in to your WordPress admin dashboard.
3. Go to **Plugins > Add New > Upload Plugin**.
4. Click **Choose File**, select `sofi-disableWP-api.zip`, and then click **Install Now**.
5. Once installed, click **Activate Plugin**.



---

## How It Works
- If a user is not logged in, they will receive the following error when attempting to access any REST API endpoint:
  ```json
  {
      "code": "rest_not_logged_in",
      "message": "You are not currently logged in.",
      "data": {
          "status": 401
      }
  }
  ```
- Logged-in users can access the REST API as usual without any restrictions.

---

## Contribution Guidelines
We welcome contributions to this project! Here's how you can get involved:

1. **Fork the Repository**: Click on the "Fork" button in the top-right corner of this repository.
2. **Create a Branch**: 
   ```bash
   git checkout -b feature/your-feature-name
   ```
3. **Make Changes**: Implement your changes or features.
4. **Commit Your Changes**:
   ```bash
   git commit -m "Add feature: your-feature-name"
   ```
5. **Push to Your Fork**:
   ```bash
   git push origin feature/your-feature-name
   ```
6. **Open a Pull Request**: Go to the original repository and click on "New Pull Request." Provide a detailed description of your changes.

### Code Style
- Follow WordPress coding standards.
- Keep functions modular and well-documented.

---

## Support My Work 💜

If you found this project useful and would like to support my work, consider donating or sponsoring me:

<p align="center">
  <a href="https://github.com/sponsors/SofiDevO" target="_blank">
    <img src="https://img.shields.io/badge/Sponsor%20me%20on%20GitHub-30363D?style=for-the-badge&logo=github-sponsors&logoColor=#EA4AAA" alt="GitHub Sponsors">
  </a>
  <a href="https://ko-fi.com/sofidev" target="_blank">
    <img src="https://img.shields.io/badge/Buy%20me%20a%20coffee-Ko--fi-ff5e5b?style=for-the-badge&logo=ko-fi&logoColor=white" alt="Ko-fi">
  </a>
</p>

Your support helps me create more open-source tools like this one! Thank you! 💜🦝🤙🏻

---

## License
This plugin is licensed under the [GNU General Public License v2.0 or later](https://www.gnu.org/licenses/gpl-2.0.html).

---

## File Structure
```
📦sofi-disableWP-api
┣ 📜README.md
┣ 📁disable-rest-api
  ┗ 📁assets
  ┗ 📁trunk
┣ 🗜️sofi-disableWP-api.zip
```

---

## About the Author
 [links.itssofi.dev](https://links.itssofi.dev/).

