wget http://hub.mcs.mail.ru/repository/terraform-binary/mirror/latest/terraform_1.1.9_linux_amd64.zip
unzip terraform_1.1.9_linux_amd64.zip
rm -f terraform_1.1.9_linux_amd64.zip
chmod +x terraform
cp terraform /usr/bin/
echo && echo
echo "Terraform installed! Write ./terraform to use."
