Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/trusty32"
  config.vm.box_url = "https://vagrantcloud.com/ubuntu/boxes/trusty32"
  config.vm.network :forwarded_port, guest: 80, host: 8080
  config.vm.provision :shell, :path => "provisioning/bootstrap.sh"
  config.vm.synced_folder ".", "/vagrant", :mount_options => ["dmode=777","fmode=666"]
end