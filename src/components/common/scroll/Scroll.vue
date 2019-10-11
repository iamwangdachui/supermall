<template>
  <div class="wrapper" ref="wrapper">
    <div class="content">
      <slot></slot>
    </div>
  </div>
</template>

<script>
import BScroll from "better-scroll";
export default {
  name: "Scroll",
  props: {
    probeType: {
      type: Number,
      default: 0
    },
    pullUpload: {
      type: Boolean,
      default: false
    }
  },
  data() {
    return {
      scroll: null
    };
  },
  mounted() {
    //1、创建BScroll对象
    this.scroll = new BScroll(this.$refs.wrapper, {
      click: true,
      probeType: this.probeType,
      pullUpload: this.pullUpload
    });

    //2、监听滚动的位置
    if (this.probeType == 2 || this.probeType == 3) {
      this.scroll.on("scroll", position => {
        this.$emit("scroll", position);
      });
    }

    //3、监听scroll滚动到底部
    if (this.pullUpload) {
      this.scroll.on("pullingUp", () => {
        console.log("滚动到底部");
        this.$emit("pullingUp");
      });
    }
  },
  methods: {
    //回到顶部
    scrollTo(x, y, time = 500) {
      this.scroll.scrollTo(x, y, time);
    },
    refresh() {
      console.log("---");
      this.scroll.refresh();
    },
    finishPullUp() {
      this.scroll && this.scroll.finishPullUp();
    }
  }
};
</script>

<style scoped>
</style>