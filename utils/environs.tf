locals {
    envs = { for tuple in regexall("(.*)=(.*)", file(".conf")) : tuple[0] => sensitive(tuple[1]) }
}