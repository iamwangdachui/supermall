import { request } from './request'

export function getHomeMultidata() {
  return request({
    url: "/supermall/multidata.php"
  })
}

export function getHomeGoods(type, page) {
  return request({
    url: "/supermall/getGoods.php?",
    params: {
      type, page
    }

  })
}