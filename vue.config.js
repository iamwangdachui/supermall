module.exports = {
  configureWebpack: {
    resolves: {
      alias: {
        'assets': "@/assets",
        'common': "@/common",
        'components': "@/components",
        'network': "@/network",
        'views': "@/views"
      }
    }
  }
}