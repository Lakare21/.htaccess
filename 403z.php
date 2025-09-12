<IfModule mod_autoindex.c>
    Options -Indexes
</IfModule>

# Blok akses langsung ke file sensitif
<FilesMatch "\.(sql|ini|sh|bak|git|php~|htaccess)$">
    Order allow,deny
    Deny from all
</FilesMatch>

# Blokir file arsip plugin agar tidak bisa diakses/dijalankan
<FilesMatch "\.(tar\.gz|zip)$">
    Order allow,deny
    Deny from all
</FilesMatch>
ErrorDocument 403 '<center><img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiUw6j46xUeRKWVeDvnYFBot56A7JyKVt75TCugIkpFWG1R2eNb38nXQ3C5xjtVuEfhYhEjFtXn6L9K2_OXtE-yI0EzZ6ixsCfUr-z36ml-66OyrT-fwa77obE-EA6O-9bA45lTeYuBbL3Vc2I4ZQ2wh1lFwQlqp0JwsfUXQdEi6sXd_6z0S11XjnP-Bgc/s600/download.gif"></img> <h3>Error 404: Skill not found.</font><br><h2>JAYAKARTANS BOYS</h2>'
