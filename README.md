---
## Build and run an application
 - Copy <code>.env.example</code> file and rename it to <code>.env</code>.
 - Run <code>docker-compose up --build -d</code>.
## Populate the database with random data
Open <code>supservice-core</code> container terminal and run:
 - <code>php bin/console doctrine:fixtures:load</code>
then press <code>y</code>.
---
