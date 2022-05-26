---

## Build an app

1. Run <code>docker-compose up --build -d</code>.
2. Open <code>php-cgi</code> container terminal and run:
 - <code>php bin/console doctrine:database:create --if-not-exists</code>
 - <code>php bin/console doctrine:scchema:create</code>

---
