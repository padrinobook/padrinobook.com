require 'rake'

posts_dir = '_posts'

desc "New post in #{posts_dir}"
task :post do
  require 'fileutils'
  require 'stringex'
  require './_plugins/titlecase.rb'

  puts "What should we call this post for now?"
  name = STDIN.gets.chomp

  mkdir_p "#{posts_dir}"
  title = "#{name.gsub(/&/,'&amp;').titlecase}"
  filename = "_posts/#{Time.now.strftime('%Y-%m-%d')}-#{name.to_url}.md"
  puts "Created new post: #{filename}"

  post_content = <<-MARKDOWN
---
layout: post
title: TITLE
description:
---
**

## Conclusion


## Further reading

  MARKDOWN
  post_content = post_content.gsub('TITLE', title)

  open(filename, 'w') do |post|
    system "mkdir -p #{posts_dir}/";
    post.puts post_content
  end
end

desc "Staging"
task :staging do
  puts "# building the site .."
  #system("jekyll")

  puts '# deploying the site ..'
  system("rsync -vru -e \"ssh -p 2222\" --del ?site/*  hostalos@itmbs.com:/home2/hostalos/www/iso25")

  puts '# Please refer to http://iso25.wikimatze.de to visit the staging system'
end

desc "Deploy"
task :deploy do
  require 'sweetie'

  puts '1. Sweetie - time to update stats ..'
  Sweetie::Conversion.conversion
  Sweetie::Bitbucket.bitbucket("wikimatze")

  puts '2. Building jekyll ..'
  system "jekyll build"

  puts '3. Deploying site with lovely rsync ..'
  system "rsync -vru -e \"ssh -p 2222\" --del ?site/* hostalos@itmbs.com:/home2/hostalos/www/wikimatze.de/"

  puts '4. Done!'
end

desc "Startup Jekyll"
task :start do
  system "jekyll build"
  system "jekyll serve --watch"
end

task :default => :start
