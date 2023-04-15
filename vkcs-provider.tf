terraform {
    required_providers {
        vkcs = {
            source = "vk-cs/vkcs"
            version = "~> 0.1.12" 
        }
    }
}

provider "vkcs" {
    username = locals.envs["USERNAME"]
    password = locals.envs["PASSWORD"]
    project_id = locals.envs["PROJECT_ID"]
    region = locals.envs["REGION"]
    auth_url = locals.envs["AUTH_URL"] 
}