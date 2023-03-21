export default (props: { info: string }) => (
  <p class="text-pink-6 my-5">
    🚨 {props.info}，出问题了，快联系站长
    <a
      href="https://jq.qq.com/?_wv=1027&k=AGD8mpTe"
      target="_blank"
      class=" underline hover:text-black">
      上报问题
    </a>
    。
  </p>
);
