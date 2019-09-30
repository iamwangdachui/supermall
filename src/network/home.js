import { request } from './request'

export function getHomeMultidata() {
  return request({
    url: "/supermall/multidata.php"
  })
}

export function getHomeGoods(type) {
  return request({
    url: "/supermall/getGoods.php?type=" + type
  })
}