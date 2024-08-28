Northern Mystery
WordPress theme by svitlasvit

===========================

INSTALLATION

For the theme to work correctly, you need to have a site with WordPress installed, as well as the ACF PRO and Contact Form 7 plugins installed on it. The settings for these plugins are in the folder "plugins-settings" in the root of the theme.

The order of work on installing the theme and plugins:

First, you need to install and activate the "Northern Mystery" theme. To do this, the folder "northern-mystery" with the theme files should be placed in the folder with WordPress themes. After that, you need to find the "Appearance" item in the site administrator menu, and in its submenu - the "Themes" item. Find the "Northern Mystery" theme in the list of themes that appears and activate it.

After that, you should install and activate the ACF PRO and Contact Form 7 plugins. They can be downloaded from the plugin library through the administrator menu (Plugins -> Add New Plugin) or from the official websites of these plugins.

After installing and activating the Contact Form 7 plugin, a new "Contact" item will appear in the administrator menu. By going to its submenu in the "Contact Forms" item, you can see the first automatically created form. You can use it or create your own. After that, you need to go to form editing, find the "Form" tab and paste the code from the file "contact-form-7.txt" from the folder "plugins-settings" into the tab field. The remaining tabs of the form contain the remaining plugin settings. You can edit them or leave them as is.

After installing and activating the ACF PRO plugin, a new "ACF" item will appear in the admin menu. In its submenu, find the "Tools" item. Through its "Import" tab, you need to select the file "acf-pro.json" from the folder "plugins-settings" and install it by clicking the "Import JSON" button.

Done! Enjoy the "Northern Mystery" theme by svitlasvit :)

===========================

FOR ADMINISTRATORS:

- when adding images to the media library, the Alternative Text field should be specified.
- when adding resume/diploma/certificate files to the media library, the Caption field should be specified. This will be used in the markup as Alternative Text for images of these files. The Alternative Text field itself in the media library should be left empty.
- When creating a new project page, you should set a featured image and an excerpt.

===========================

FOR DEVELOPERS:

Commands:

npm install
Installs npm-dependencies into the project. After this, the node_modules directory and the package-lock.json file will appear in the project root.

npm run build
Launches Gulp. After this, the files assets/js/app.min.js, assets/scss/app.min.css, assets/scss/app.min.css.map will appear in the project.

===========================
