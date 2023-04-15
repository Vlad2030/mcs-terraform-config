.PHONY: install
install:
	sh scripts/terraform-install.sh

.PHONY: init
init:
	terraform init

.PHONY: apply
apply:
	terraform apply

.PHONY: destroy
destroy:
	terraform destroy