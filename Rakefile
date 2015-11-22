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
  puts "Clean site ..".bold.green
  system 'bundle exec jekyll clean'

  puts "Build jekyll ..".bold.green
  system 'bundle exec jekyll build'

  puts "Deploying site with lovely rsync to /home/www/padrinobook ..".bold.green
  system "rsync -vru -e \"ssh\" --del ?site/* xa6195@xa6.serverdomain.org:/home/www/padrinobook/"

  puts "Done!".bold.green
end

desc "Startup Jekyll"
task :s do
  system "bundle exec jekyll s --watch"
end

desc "Get HTML sources of the book"
task :h do
  system "cd ~/git/PadrinoBook && gitbook build --gitbook=2.4.0 && rm -rf ~/git/padrinobook-website/book && mv -f _book ~/git/padrinobook-website/book"
end

task :default => :s
