require 'colorator'
require 'rake'

desc 'Staging'
task :staging do
  puts "1. Building jekyll ..".bold.green
  system 'jekyll build'

  puts "2. Deploying site with lovely rsync to /home/www/iso25..".bold.green
  system "rsync -vru -e \"ssh\" --del ?site/* xa6195@xa6.serverdomain.org:/home/www/iso25"

  puts "3. Done!".bold.green
end

desc 'Deploy'
task :d => :html do
  puts "1. Building jekyll ..".bold.green
  system 'jekyll build'

  puts "2. Deploying site with lovely rsync to /home/www/padrinobook ..".bold.green
  system "rsync -vru -e \"ssh\" --del ?site/* xa6195@xa6.serverdomain.org:/home/www/padrinobook/"

  puts "3. Done!".bold.green
end

desc "Startup Jekyll"
task :s do
  system "jekyll serve --watch"
end


desc "Get HTML sources of the book"
task :html do
  system "cd ~/ownCloud/padrino/manuscript && gitbook build && mv ~/ownCloud/padrino/manuscript/_book ~/ownCloud/padrinobook-website/book"
end

task :default => :s
