require 'colorator'
require 'rake'

desc "Staging"
task :staging do
  puts "Building jekyll ..".bold.green
  system 'jekyll build'

  puts "Deploying site with lovely rsync to /home/www/iso25..".bold.green
  system "rsync -vru -e \"ssh\" --del ?site/* xa6195@xa6.serverdomain.org:/home/www/iso25"

  puts "Done!".bold.green
end

desc "Deploy"
task :d => :h do
  puts "Building jekyll ..".bold.green
  system 'jekyll build'

  puts "Deploying site with lovely rsync to /home/www/padrinobook ..".bold.green
  system "rsync -vru -e \"ssh\" --del ?site/* xa6195@xa6.serverdomain.org:/home/www/padrinobook/"

  puts "Done!".bold.green
end

desc "Startup Jekyll"
task :s do
  system "jekyll serve --watch"
end

desc "Get HTML sources of the book"
task :h do
  system "cd ~/ownCloud/padrino/manuscript && gitbook build && rm -rf ~/ownCloud/padrinobook-website/book && mv -f ~/ownCloud/padrino/manuscript/_book ~/ownCloud/padrinobook-website/book"
end

task :default => :s
