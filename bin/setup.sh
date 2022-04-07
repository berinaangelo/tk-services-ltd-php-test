green=`tput setaf 2`
yellow=`tput setaf 3`

printf "${yellow}\n=========================================\n"
printf "${yellow}Cloning .env.backup..."
printf "${yellow}\n=========================================\n"
cp .env.backup .env
printf "${green}Cloning Done.\n"
printf "${yellow}\n=========================================\n"
printf "${yellow}Installing Dependencies..."
printf "${yellow}\n=========================================\n"
composer install
printf "${green}\n\nDependencies installed."
printf "${yellow}\n=========================================\n"
printf "${yellow}Generating app secret...."
printf "${yellow}\n=========================================\n"
php artisan key:generate
printf "${yellow}\n=========================================\n"
printf "${yellow}Initializing Database...."
printf "${yellow}\n=========================================\n"
php artisan db:create
printf "${green}Database setup initialized.\n"
printf "${yellow}\n=========================================\n"
printf "${yellow}Running existing migrations...."
printf "${yellow}\n=========================================\n"
php artisan migrate
printf "${green}Existing migrations migrated.\n" 
printf "${yellow}\n=========================================\n"
printf "${yellow}Seeding existing data..."
printf "${yellow}\n=========================================\n"
php artisan db:seed
printf "${green}Setup Complete...\n\n\nRun server using this command:\n${yellow}php artisan serve\n"
