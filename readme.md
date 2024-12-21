# Northern Mystery

- Author: svitlasvit
- Author URI: https://svitlasvit.pp.ua
- Description: WordPress-theme for personal portfolio. It was created under the inspiration of the beauty of northern nature.
- Tags: portfolio
- Version: 1.0.1
- Requires at least: 6.6
- Tested up to: 6.6
- Requires PHP: 8.1
- License: GNU General Public License v2 or later
- License URI: http://www.gnu.org/licenses/gpl-2.0.html

![Northern Mystery Theme. Screenshot](/screenshots/northern-mystery.png)

## Description

Theme "Northern Mystery" - WordPress theme for creating a personal portfolio. This theme is suitable for creating a portfolio for specialists in any field, but is especially suitable for IT specialists.

Theme "Northern Mystery" was created under the inspiration of the beauty of northern nature. It uses Raleway and Ubuntu fonts to highlight the modern feel of the theme. The theme's color scheme is based on the colors of summer northern nature (dark pine needles, mint, wild berries and gray clouds), and the main page uses a photo of the Canadian Lake Louise.

The theme allows the administrator to add and edit photos and information about the specialist. It also supports adding and editing information about the projects completed by the specialist. The theme supports adding a resume and educational documents. It is possible to add specialist contacts (mail, phone, instant messengers and social networks). In addition, the theme has a mobile menu and a contact form. Almost all content in the theme is flexibly customizable, attention is paid even to small details. For example, the text in the footer can be changed by the administrator at will - you can insert a quote, a tagline or any other text there :)

The theme was created with love and care, I hope you will like it too :)

## Installation and usage

### Installation

- Download the theme in zip format.
- In the administrative part of website, go to "Appearance" -> "Themes" -> "Add new theme" -> "Upload theme". Choose the archive and upload it. Activate theme.
- Install and activate the ACF PRO plugin. This can be done through "Admin Menu" -> "Plugins" -> "Add New Plugin". You can also download the plugin from the official website of this plugin.
- Go to "Admin Menu" -> "ACF" -> "Tools" -> "Import", select the "acf-pro.json" file from the "plugins-settings" folder and install settings of ACF PRO by clicking the "Import JSON" button. Note: The "plugins-settings" folder is located directly in the root of theme.
- Create a pages, choosing the "Home Page", "About Page" and "Contacts Page" templates. After creating a page using the template "Home Page" make it the homepage. For this go to "Settings" -> "Reading" -> "Your homepage displays", choose "A static page". In "Homepage" choose a page that was created using the "Home Page" template.
- Create menus in "Appearance" -> "Menus" ("Header Menu" and "Mobile Menu"). Both menus should have the following items: "Home" (Main page), "Works" (Custom Link "/works"), "About" (Page), "Contacts" (Page).

Done! Enjoy the "Northern Mystery" theme by svitlasvit :)

### Usage for administrators:

- "Projects" are a Custom Post Type. To add a project, go to "Projects" -> "Add new Project". After this, in the sidebar, select the "Project Page" template.
- When adding images to the media library, the Alternative Text field should be specified.
- When adding resume/diploma/certificate files to the media library, the Caption field should be specified. This will be used in the markup as Alternative Text for images of these files. The Alternative Text field itself in the media library should be left empty.
- When creating a new project page, you should set a featured image and an excerpt.

### Usage for developers:

#### Commands:

- npm install - installs npm-dependencies into the project. After this, the node_modules directory and the package-lock.json file will appear in the project root.

- npm run build - launches Gulp. At the same time, the files assets/js/app.min.js, assets/scss/app.min.css, assets/scss/app.min.css.map will appear in the project.

#### Contact Form 7:

The theme contains code for Contact Form 7. Important note - the form has not been tested.
In order for the form to appear on the site, you must perform the following steps:

- Install and activate the Contact Form 7 plugin. This can be done through Admin Menu -> Plugins -> Add New Plugin. You can also download the plugin from the official website of this plugin.
- In Admin Menu -> Contact -> Contact Forms, you will see the form automatically created by the Contact Form 7 plugin. You can use it or create your own. Select the "Editing" action for the selected form, go to the "Form" tab and paste the code from the "contact-form-7.txt" file, which is located in the "plugins-settings" folder, into the input field. On this same tab, pay attention to the shortcode, or rather to its data in "id" and "title". Remember this data. You can edit the settings that are in the other tabs of the form as you wish.
- Uncomment the line with the shortcode in the contacts-page.php file. Paste the data you remembered in the previous step into the "id" and "title" of this shortcode.

Note: The "plugins-settings" folder is located directly in the "northern-mystery" folder.

## Resources

### Images

- ["lake-louise.webp"](https://pixabay.com/photos/lake-louise-canada-travel-2078089) by [clpowell](https://pixabay.com/users/clpowell-4597287) on [Pixabay](https://pixabay.com), licensed under [Pixabay Terms of Service](https://pixabay.com/service/terms) ( License Summary is [here](https://pixabay.com/service/license-summary) ). Resource was modified by svitlasvit.
- ["herb-1.webp", "herb-2.webp", "herb-3.webp"](https://pixabay.com/vectors/herbs-leaves-plants-marjoram-basil-7681722) by [ArtRose](https://pixabay.com/users/artrose-16042123) on [Pixabay](https://pixabay.com), licensed under [Pixabay Terms of Service](https://pixabay.com/service/terms) ( License Summary is [here](https://pixabay.com/service/license-summary) ). Resource was modified by svitlasvit.

### SVGs

- ["tree.svg"](https://www.vecteezy.com/vector-art/45787840-black-and-white-tree-silhouettes-illustration) by [Rony Sikder](https://www.vecteezy.com/members/ronyhridoy) on [Vecteezy](https://www.vecteezy.com), licensed under [Vecteezy License Agreement](https://www.vecteezy.com/licensing-agreement) ( License Summary is [here](https://support.vecteezy.com/en_us/new-vecteezy-licensing-ByHivesvt) ). Resource was modified by svitlasvit.
- "menu-hamburger.svg", "cross.svg", "email.svg", "phone.svg" from collection [Smoothie Line Icons Collection](https://www.svgrepo.com/collection/smoothie-line-icons) by [Luka Marr](https://www.svgrepo.com/author/Luka%20Marr), licensed under CC Attribution License ( License Summary is [here](https://www.svgrepo.com/page/licensing/#CC%20Attribution) ). Resources was modified by svitlasvit.
- "instagram.svg", "facebook.svg" from collection [Social Networks Logos 2 Collection](https://www.svgrepo.com/collection/social-networks-logos-2) by unknown Author, licensed under CC0 License ( License Summary is [here](https://www.svgrepo.com/page/licensing/#CC0) ). Resources was modified by svitlasvit.
- "github.svg", "linkedin.svg", "skype.svg", "telegram.svg", "viber.svg", "whatsapp.svg" from collection [Colored Interface And Logo Icons Collection](https://www.svgrepo.com/collection/colored-interface-and-logo-icons) by [Garuda Technology](https://www.svgrepo.com/author/Garuda%20Technology), licensed under MIT License (License Summary is [here](https://www.svgrepo.com/page/licensing/#MIT) ). Resources was modified by svitlasvit.
- "djinni.svg" by unknown Author, licensed under unknown license. Resources was modified by svitlasvit.

### Fonts

- "[Raleway](https://fonts.google.com/specimen/Ubuntu)" by Matt McInerney, Pablo Impallari, [Rodrigo Fuenzalida](https://www.behance.net/erreefe), licensed under [Open Font License](https://openfontlicense.org). Resource was modified (reformatted) by svitlasvit.
- "[Ubuntu](https://fonts.google.com/specimen/Ubuntu)" by [Dalton Maag](https://www.daltonmaag.com), licensed under [Ubuntu Font Licence](https://ubuntu.com/legal/font-licence). Resource was modified (reformatted) by svitlasvit.

### Special Thanks

- Special thanks to the open source community and everyone else who made this theme possible.

## Changelog

### v. 1.0.1

- Updated instructions of some ACF fields.
- Text in the footer "Developed with ❤️ by Svitlana Lazurenko (svitlasvit)" has been updated to "Designed and developed with ❤️ by Svitlana Lazurenko (svitlasvit)".

### v. 1.0.2

- Change readme, add screenhot of theme section.
