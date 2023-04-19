resource "vkcs_lb_loadbalancer" "loadbalancer" {
    name = "loadbalancer"
    vip_subnet_id = "${vkcs_networking_subnet.lb.id}"
    tags = ["tag1"]
}

resource "vkcs_lb_listener" "listener" {
    name = "listener"
    protocol = "HTTP"
    protocol_port = 8080
    loadbalancer_id = "${vkcs_lb_loadbalancer.loadbalancer.id}"
}

resource "vkcs_lb_pool" "pool" {
    name = "pool"
    protocol = "HTTP"
    lb_method = "ROUND_ROBIN"
    listener_id = "${vkcs_lb_listener.listener.id}"
}

resource "vkcs_lb_member" "member_1" {
    address = "192.168.199.110"
    protocol_port = 8080
    pool_id = "${vkcs_lb_pool.pool.id}"
    subnet_id = "${vkcs_networking_subnet.lb.id}"
    weight = 0
}

resource "vkcs_lb_member" "member_2" {
    address = "192.168.199.111"
    protocol_port = 8080
    pool_id = "${vkcs_lb_pool.pool.id}"
    subnet_id = "${vkcs_networking_subnet.lb.id}"
}