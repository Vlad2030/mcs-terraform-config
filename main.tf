terraform {
    required_providers {
        vkcs = {
            source = "vk-cs/vkcs"
        }
    }
}

locals {
    envs = { for tuple in regexall("(.*)=(.*)", file(".env")) : tuple[0] => sensitive(tuple[1]) }
}

provider "vkcs" {
    username = locals.envs["USERNAME"]
    password = locals.envs["PASSWORD"]
    project_id = locals.envs["PROJECT_ID"]
    region = locals.envs["REGION"]
}

