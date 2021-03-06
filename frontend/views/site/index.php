<?php
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = "SBA: SUCCESSFUL BOOKING AGENCY ". \Yii::t('general', 'Be successful with us!');

$this->registerJsFile(Yii::$app->request->baseUrl.'/js/menu.js');
$this->registerJsFile(Yii::$app->request->baseUrl.'/js/menu-transparent.js');
$this->registerJsFile(Yii::$app->request->baseUrl.'/js/animate.js');
?>
<!--<script>-->
<!--    $('.navbar-inverse').addClass('nav-main-page').addClass('nav-transparent');-->
<!--    var logoSrcLight = window.location.origin + '/frontend/web/img/logo_l.png';-->
<!--    $('.navbar-brand .logo').attr('src', logoSrcLight);-->
<!--</script>-->

<svg style="display: none;" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <symbol id="icon-guest" viewBox="0 0 28 32">
            <title>guest</title>
            <path d="M24 12h-20c-2.208 0-4 1.792-4 4v2c0 1.477 0.808 2.752 2 3.445v6.555h8v4h8v-4h8v-6.555c1.191-0.693 2-1.967 2-3.445v-2c0-2.208-1.793-4-4-4zM8 26h-4v-8h-2v-2c0-1.104 0.897-2 2-2h2.554c-0.344 0.59-0.554 1.268-0.554 2v4c0 1.477 0.808 2.752 2 3.445v2.555zM18 22v-4h-2v12h-4v-12h-2v4c-1.104 0-2-0.895-2-2v-4c0-1.104 0.896-2 2-2h8c1.105 0 2 0.896 2 2v4c0 1.105-0.895 2-2 2zM26 18h-2v8h-4v-2.555c1.191-0.693 2-1.967 2-3.445v-4c0-0.732-0.211-1.41-0.555-2h2.555c1.105 0 2 0.896 2 2v2zM9.49 9.918c1.1 1.266 2.702 2.082 4.51 2.082s3.41-0.816 4.51-2.082c0.682 1.236 1.98 2.082 3.49 2.082 2.207 0 4-1.792 4-4s-1.793-4-4-4c-0.801 0-1.543 0.24-2.168 0.646-0.617-2.66-2.986-4.646-5.832-4.646s-5.216 1.986-5.832 4.646c-0.626-0.406-1.368-0.647-2.168-0.647-2.208 0-4 1.792-4 4s1.792 4 4 4c1.51 0 2.808-0.846 3.49-2.082zM22 6c1.105 0 2 0.894 2 2s-0.895 2-2 2c-1.104 0-2-0.894-2-2s0.896-2 2-2zM14 2c2.207 0 4 1.792 4 4s-1.793 4-4 4c-2.208 0-4-1.792-4-4s1.792-4 4-4zM6 10c-1.104 0-2-0.894-2-2s0.896-2 2-2c1.106 0 2 0.894 2 2s-0.894 2-2 2z"></path>
        </symbol>
        <symbol id="icon-bubbles" viewBox="0 0 36 32">
            <title>bubbles</title>
            <path d="M15 4c-1.583 0-3.112 0.248-4.543 0.738-1.341 0.459-2.535 1.107-3.547 1.926-1.876 1.518-2.91 3.463-2.91 5.474 0 1.125 0.315 2.217 0.935 3.247 0.646 1.073 1.622 2.056 2.821 2.842 0.951 0.624 1.592 1.623 1.761 2.748 0.028 0.187 0.051 0.375 0.068 0.564 0.085-0.079 0.169-0.16 0.254-0.244 0.754-0.751 1.771-1.166 2.823-1.166 0.167 0 0.335 0.011 0.503 0.032 0.605 0.077 1.223 0.116 1.836 0.116 1.583 0 3.112-0.248 4.543-0.738 1.341-0.459 2.535-1.107 3.547-1.926 1.876-1.518 2.91-3.463 2.91-5.474s-1.033-3.956-2.91-5.474c-1.012-0.819-2.206-1.467-3.547-1.926-1.431-0.49-2.96-0.738-4.543-0.738zM15 0v0c8.284 0 15 5.435 15 12.139s-6.716 12.139-15 12.139c-0.796 0-1.576-0.051-2.339-0.147-3.222 3.209-6.943 3.785-10.661 3.869v-0.785c2.008-0.98 3.625-2.765 3.625-4.804 0-0.285-0.022-0.564-0.063-0.837-3.392-2.225-5.562-5.625-5.562-9.434 0-6.704 6.716-12.139 15-12.139zM31.125 27.209c0 1.748 1.135 3.278 2.875 4.118v0.673c-3.223-0.072-6.181-0.566-8.973-3.316-0.661 0.083-1.337 0.126-2.027 0.126-2.983 0-5.732-0.805-7.925-2.157 4.521-0.016 8.789-1.464 12.026-4.084 1.631-1.32 2.919-2.87 3.825-4.605 0.961-1.84 1.449-3.799 1.449-5.825 0-0.326-0.014-0.651-0.039-0.974 2.268 1.873 3.664 4.426 3.664 7.24 0 3.265-1.88 6.179-4.82 8.086-0.036 0.234-0.055 0.474-0.055 0.718z"></path>
        </symbol>
        <symbol id="icon-umbrella" viewBox="0 0 32 32">
            <title>umbrella</title>
            <path d="M29.5 12c1.381 0 2.5 0.895 2.5 2 0-5.415-6.671-9.825-15-9.995v-1.506c0-0.276-0.232-0.499-0.5-0.499-0.276 0-0.5 0.216-0.5 0.499v1.506c-8.329 0.17-15 4.58-15 9.995 0-1.105 1.119-2 2.5-2s2.5 0.895 2.5 2c0-1.105 1.119-2 2.5-2s2.5 0.895 2.5 2c0-1.105 1.119-2 2.5-2s2.5 0.895 2.5 2v14.009c0 0.54-0.448 0.991-1 0.991-0.556 0-1-0.444-1-0.991v-1.505c0-0.279-0.232-0.505-0.5-0.505-0.276 0-0.5 0.214-0.5 0.505v1.494c0 1.105 0.888 2.001 2 2.001 1.105 0 2-0.888 2-2v-14c0-1.105 1.119-2 2.5-2s2.5 0.895 2.5 2c0-1.105 1.119-2 2.5-2s2.5 0.895 2.5 2c0-1.105 1.119-2 2.5-2v0zM16 11.9c-0.635-0.556-1.521-0.9-2.5-0.9-0.894 0-1.71 0.287-2.328 0.76v0c0.568-3.631 2.487-6.378 4.828-6.723v6.864zM17 11.9v-6.864c2.341 0.345 4.26 3.092 4.828 6.723-0.619-0.473-1.434-0.76-2.328-0.76-0.979 0-1.865 0.345-2.5 0.9zM10.224 11.389c-0.509-0.247-1.097-0.389-1.724-0.389-0.801 0-1.539 0.23-2.128 0.618v0c0.918-2.873 3.455-5.173 6.718-6.133-1.389 1.319-2.43 3.42-2.866 5.903v0 0zM22.776 11.389v0 0c-0.436-2.483-1.477-4.584-2.866-5.903 3.263 0.96 5.8 3.26 6.718 6.133-0.59-0.388-1.328-0.618-2.128-0.618-0.627 0-1.215 0.141-1.724 0.389zM5.373 11.465c-0.542-0.295-1.184-0.465-1.873-0.465-0.243 0-0.48 0.021-0.71 0.062 1.158-2.083 3.514-3.819 6.556-4.892-1.917 1.326-3.336 3.173-3.974 5.295v0 0zM23.654 6.17c3.042 1.073 5.398 2.809 6.556 4.892-0.229-0.040-0.466-0.062-0.71-0.062-0.689 0-1.331 0.171-1.873 0.465-0.638-2.122-2.057-3.969-3.974-5.295v0 0z"></path>
        </symbol>
        <symbol id="icon-like" viewBox="0 0 32 32">
            <title>like</title>
            <path d="M29.164 10.472c-1.25-0.328-4.189-0.324-8.488-0.438 0.203-0.938 0.25-1.784 0.25-3.286 0-3.588-2.614-6.748-4.926-6.748-1.633 0-2.979 1.335-3 2.977-0.022 2.014-0.645 5.492-4 7.256-0.246 0.13-0.95 0.477-1.053 0.522l0.053 0.045c-0.525-0.453-1.253-0.8-2-0.8h-3c-1.654 0-3 1.346-3 3v16c0 1.654 1.346 3 3 3h3c1.19 0 2.186-0.719 2.668-1.727 0.012 0.004 0.033 0.010 0.047 0.012 0.066 0.018 0.144 0.037 0.239 0.062 0.018 0.005 0.027 0.007 0.046 0.012 0.576 0.143 1.685 0.408 4.055 0.953 0.508 0.116 3.192 0.688 5.972 0.688h5.467c1.666 0 2.867-0.641 3.582-1.928 0.010-0.020 0.24-0.469 0.428-1.076 0.141-0.457 0.193-1.104 0.023-1.76 1.074-0.738 1.42-1.854 1.645-2.58 0.377-1.191 0.264-2.086 0.002-2.727 0.604-0.57 1.119-1.439 1.336-2.766 0.135-0.822-0.010-1.668-0.389-2.372 0.566-0.636 0.824-1.436 0.854-2.176l0.012-0.209c0.007-0.131 0.013-0.212 0.013-0.5 0-1.263-0.875-2.874-2.836-3.434zM7 29c0 0.553-0.447 1-1 1h-3c-0.553 0-1-0.447-1-1v-16c0-0.553 0.447-1 1-1h3c0.553 0 1 0.447 1 1v16zM29.977 14.535c-0.020 0.494-0.227 1.465-1.977 1.465-1.5 0-2 0-2 0-0.277 0-0.5 0.224-0.5 0.5s0.223 0.5 0.5 0.5c0 0 0.438 0 1.938 0s1.697 1.244 1.6 1.844c-0.124 0.746-0.474 2.156-2.163 2.156-1.687 0-2.375 0-2.375 0-0.277 0-0.5 0.223-0.5 0.5 0 0.275 0.223 0.5 0.5 0.5 0 0 1.188 0 1.969 0 1.688 0 1.539 1.287 1.297 2.055-0.319 1.009-0.514 1.945-2.641 1.945-0.719 0-1.631 0-1.631 0-0.277 0-0.5 0.223-0.5 0.5 0 0.275 0.223 0.5 0.5 0.5 0 0 0.693 0 1.568 0 1.094 0 1.145 1.035 1.031 1.406-0.125 0.406-0.273 0.707-0.279 0.721-0.302 0.545-0.789 0.873-1.82 0.873h-5.467c-2.746 0-5.47-0.623-5.54-0.639-4.154-0.957-4.373-1.031-4.634-1.105 0 0-0.846-0.143-0.846-0.881l-0.007-13.812c0-0.469 0.299-0.893 0.794-1.042 0.062-0.024 0.146-0.050 0.206-0.075 4.568-1.892 5.959-6.040 6-9.446 0.006-0.479 0.375-1 1-1 1.057 0 2.926 2.122 2.926 4.748 0 2.371-0.096 2.781-0.926 5.252 10 0 9.93 0.144 10.812 0.375 1.094 0.313 1.188 1.219 1.188 1.531 0 0.343-0.010 0.293-0.023 0.629zM4.5 26c-0.828 0-1.5 0.672-1.5 1.5s0.672 1.5 1.5 1.5 1.5-0.672 1.5-1.5-0.672-1.5-1.5-1.5zM4.5 28c-0.275 0-0.5-0.225-0.5-0.5s0.225-0.5 0.5-0.5 0.5 0.225 0.5 0.5-0.225 0.5-0.5 0.5z"></path>
        </symbol>

        <symbol id="icon-youtube" viewBox="0 0 27 32">
            <title>youtube</title>
            <path d="M17.339 22.214v3.768q0 1.196-0.696 1.196-0.411 0-0.804-0.393v-5.375q0.393-0.393 0.804-0.393 0.696 0 0.696 1.196zM23.375 22.232v0.821h-1.607v-0.821q0-1.214 0.804-1.214t0.804 1.214zM6.125 18.339h1.911v-1.679h-5.571v1.679h1.875v10.161h1.786v-10.161zM11.268 28.5h1.589v-8.821h-1.589v6.75q-0.536 0.75-1.018 0.75-0.321 0-0.375-0.375-0.018-0.054-0.018-0.625v-6.5h-1.589v6.982q0 0.875 0.143 1.304 0.214 0.661 1.036 0.661 0.857 0 1.821-1.089v0.964zM18.929 25.857v-3.518q0-1.304-0.161-1.768-0.304-1-1.268-1-0.893 0-1.661 0.964v-3.875h-1.589v11.839h1.589v-0.857q0.804 0.982 1.661 0.982 0.964 0 1.268-0.982 0.161-0.482 0.161-1.786zM24.964 25.679v-0.232h-1.625q0 0.911-0.036 1.089-0.125 0.643-0.714 0.643-0.821 0-0.821-1.232v-1.554h3.196v-1.839q0-1.411-0.482-2.071-0.696-0.911-1.893-0.911-1.214 0-1.911 0.911-0.5 0.661-0.5 2.071v3.089q0 1.411 0.518 2.071 0.696 0.911 1.929 0.911 1.286 0 1.929-0.946 0.321-0.482 0.375-0.964 0.036-0.161 0.036-1.036zM14.107 9.375v-3.75q0-1.232-0.768-1.232t-0.768 1.232v3.75q0 1.25 0.768 1.25t0.768-1.25zM26.946 22.786q0 4.179-0.464 6.25-0.25 1.054-1.036 1.768t-1.821 0.821q-3.286 0.375-9.911 0.375t-9.911-0.375q-1.036-0.107-1.83-0.821t-1.027-1.768q-0.464-2-0.464-6.25 0-4.179 0.464-6.25 0.25-1.054 1.036-1.768t1.839-0.839q3.268-0.357 9.893-0.357t9.911 0.357q1.036 0.125 1.83 0.839t1.027 1.768q0.464 2 0.464 6.25zM9.125 0h1.821l-2.161 7.125v4.839h-1.786v-4.839q-0.25-1.321-1.089-3.786-0.661-1.839-1.161-3.339h1.893l1.268 4.696zM15.732 5.946v3.125q0 1.446-0.5 2.107-0.661 0.911-1.893 0.911-1.196 0-1.875-0.911-0.5-0.679-0.5-2.107v-3.125q0-1.429 0.5-2.089 0.679-0.911 1.875-0.911 1.232 0 1.893 0.911 0.5 0.661 0.5 2.089zM21.714 3.054v8.911h-1.625v-0.982q-0.946 1.107-1.839 1.107-0.821 0-1.054-0.661-0.143-0.429-0.143-1.339v-7.036h1.625v6.554q0 0.589 0.018 0.625 0.054 0.393 0.375 0.393 0.482 0 1.018-0.768v-6.804h1.625z"></path>
        </symbol>
        <symbol id="icon-vk" viewBox="0 0 35 32">
            <title>vk</title>
            <path d="M34.232 9.286q0.411 1.143-2.679 5.25-0.429 0.571-1.161 1.518-1.393 1.786-1.607 2.339-0.304 0.732 0.25 1.446 0.304 0.375 1.446 1.464h0.018l0.071 0.071q2.518 2.339 3.411 3.946 0.054 0.089 0.116 0.223t0.125 0.473-0.009 0.607-0.446 0.491-1.054 0.223l-4.571 0.071q-0.429 0.089-1-0.089t-0.929-0.393l-0.357-0.214q-0.536-0.375-1.25-1.143t-1.223-1.384-1.089-1.036-1.009-0.277q-0.054 0.018-0.143 0.063t-0.304 0.259-0.384 0.527-0.304 0.929-0.116 1.384q0 0.268-0.063 0.491t-0.134 0.33l-0.071 0.089q-0.321 0.339-0.946 0.393h-2.054q-1.268 0.071-2.607-0.295t-2.348-0.946-1.839-1.179-1.259-1.027l-0.446-0.429q-0.179-0.179-0.491-0.536t-1.277-1.625-1.893-2.696-2.188-3.768-2.33-4.857q-0.107-0.286-0.107-0.482t0.054-0.286l0.071-0.107q0.268-0.339 1.018-0.339l4.893-0.036q0.214 0.036 0.411 0.116t0.286 0.152l0.089 0.054q0.286 0.196 0.429 0.571 0.357 0.893 0.821 1.848t0.732 1.455l0.286 0.518q0.518 1.071 1 1.857t0.866 1.223 0.741 0.688 0.607 0.25 0.482-0.089q0.036-0.018 0.089-0.089t0.214-0.393 0.241-0.839 0.17-1.446 0-2.232q-0.036-0.714-0.161-1.304t-0.25-0.821l-0.107-0.214q-0.446-0.607-1.518-0.768-0.232-0.036 0.089-0.429 0.304-0.339 0.679-0.536 0.946-0.464 4.268-0.429 1.464 0.018 2.411 0.232 0.357 0.089 0.598 0.241t0.366 0.429 0.188 0.571 0.063 0.813-0.018 0.982-0.045 1.259-0.027 1.473q0 0.196-0.018 0.75t-0.009 0.857 0.063 0.723 0.205 0.696 0.402 0.438q0.143 0.036 0.304 0.071t0.464-0.196 0.679-0.616 0.929-1.196 1.214-1.92q1.071-1.857 1.911-4.018 0.071-0.179 0.179-0.313t0.196-0.188l0.071-0.054 0.089-0.045t0.232-0.054 0.357-0.009l5.143-0.036q0.696-0.089 1.143 0.045t0.554 0.295z"></path>
        </symbol>
        <symbol id="icon-facebook" viewBox="0 0 32 32">
            <title>facebook</title>
            <path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
        </symbol>
        <symbol id="icon-instagram" viewBox="0 0 32 32">
            <title>instagram</title>
            <path d="M16 2.881c4.275 0 4.781 0.019 6.462 0.094 1.563 0.069 2.406 0.331 2.969 0.55 0.744 0.288 1.281 0.638 1.837 1.194 0.563 0.563 0.906 1.094 1.2 1.838 0.219 0.563 0.481 1.412 0.55 2.969 0.075 1.688 0.094 2.194 0.094 6.463s-0.019 4.781-0.094 6.463c-0.069 1.563-0.331 2.406-0.55 2.969-0.288 0.744-0.637 1.281-1.194 1.837-0.563 0.563-1.094 0.906-1.837 1.2-0.563 0.219-1.413 0.481-2.969 0.55-1.688 0.075-2.194 0.094-6.463 0.094s-4.781-0.019-6.463-0.094c-1.563-0.069-2.406-0.331-2.969-0.55-0.744-0.288-1.281-0.637-1.838-1.194-0.563-0.563-0.906-1.094-1.2-1.837-0.219-0.563-0.481-1.413-0.55-2.969-0.075-1.688-0.094-2.194-0.094-6.463s0.019-4.781 0.094-6.463c0.069-1.563 0.331-2.406 0.55-2.969 0.288-0.744 0.638-1.281 1.194-1.838 0.563-0.563 1.094-0.906 1.838-1.2 0.563-0.219 1.412-0.481 2.969-0.55 1.681-0.075 2.188-0.094 6.463-0.094zM16 0c-4.344 0-4.887 0.019-6.594 0.094-1.7 0.075-2.869 0.35-3.881 0.744-1.056 0.412-1.95 0.956-2.837 1.85-0.894 0.888-1.438 1.781-1.85 2.831-0.394 1.019-0.669 2.181-0.744 3.881-0.075 1.713-0.094 2.256-0.094 6.6s0.019 4.887 0.094 6.594c0.075 1.7 0.35 2.869 0.744 3.881 0.413 1.056 0.956 1.95 1.85 2.837 0.887 0.887 1.781 1.438 2.831 1.844 1.019 0.394 2.181 0.669 3.881 0.744 1.706 0.075 2.25 0.094 6.594 0.094s4.888-0.019 6.594-0.094c1.7-0.075 2.869-0.35 3.881-0.744 1.050-0.406 1.944-0.956 2.831-1.844s1.438-1.781 1.844-2.831c0.394-1.019 0.669-2.181 0.744-3.881 0.075-1.706 0.094-2.25 0.094-6.594s-0.019-4.887-0.094-6.594c-0.075-1.7-0.35-2.869-0.744-3.881-0.394-1.063-0.938-1.956-1.831-2.844-0.887-0.887-1.781-1.438-2.831-1.844-1.019-0.394-2.181-0.669-3.881-0.744-1.712-0.081-2.256-0.1-6.6-0.1v0z"></path>
            <path d="M16 7.781c-4.537 0-8.219 3.681-8.219 8.219s3.681 8.219 8.219 8.219 8.219-3.681 8.219-8.219c0-4.537-3.681-8.219-8.219-8.219zM16 21.331c-2.944 0-5.331-2.387-5.331-5.331s2.387-5.331 5.331-5.331c2.944 0 5.331 2.387 5.331 5.331s-2.387 5.331-5.331 5.331z"></path>
            <path d="M26.462 7.456c0 1.060-0.859 1.919-1.919 1.919s-1.919-0.859-1.919-1.919c0-1.060 0.859-1.919 1.919-1.919s1.919 0.859 1.919 1.919z"></path>
        </symbol>

        <symbol id="icon-whatsapp" viewBox="0 0 27 32">
            <title>whatsapp</title>
            <path d="M17.589 17.393q0.232 0 1.741 0.786t1.598 0.946q0.036 0.089 0.036 0.268 0 0.589-0.304 1.357-0.286 0.696-1.268 1.17t-1.821 0.473q-1.018 0-3.393-1.107-1.75-0.804-3.036-2.107t-2.643-3.304q-1.286-1.911-1.268-3.464v-0.143q0.054-1.625 1.321-2.821 0.429-0.393 0.929-0.393 0.107 0 0.321 0.027t0.339 0.027q0.339 0 0.473 0.116t0.277 0.491q0.143 0.357 0.589 1.571t0.446 1.339q0 0.375-0.616 1.027t-0.616 0.83q0 0.125 0.089 0.268 0.607 1.304 1.821 2.446 1 0.946 2.696 1.804 0.214 0.125 0.393 0.125 0.268 0 0.964-0.866t0.929-0.866zM13.964 26.857q2.268 0 4.348-0.893t3.58-2.393 2.393-3.58 0.893-4.348-0.893-4.348-2.393-3.58-3.58-2.393-4.348-0.893-4.348 0.893-3.58 2.393-2.393 3.58-0.893 4.348q0 3.625 2.143 6.571l-1.411 4.161 4.321-1.375q2.821 1.857 6.161 1.857zM13.964 2.179q2.732 0 5.223 1.071t4.295 2.875 2.875 4.295 1.071 5.223-1.071 5.223-2.875 4.295-4.295 2.875-5.223 1.071q-3.482 0-6.518-1.679l-7.446 2.393 2.429-7.232q-1.929-3.179-1.929-6.946 0-2.732 1.071-5.223t2.875-4.295 4.295-2.875 5.223-1.071z"></path>
        </symbol>
        <symbol id="icon-wechat" viewBox="0 0 37 32">
            <title>wechat</title>
            <path d="M10.357 8.232q0-0.732-0.446-1.179t-1.179-0.446q-0.768 0-1.357 0.455t-0.589 1.17q0 0.696 0.589 1.152t1.357 0.455q0.732 0 1.179-0.438t0.446-1.17zM23.625 17.286q0-0.5-0.455-0.893t-1.17-0.393q-0.482 0-0.884 0.402t-0.402 0.884q0 0.5 0.402 0.902t0.884 0.402q0.714 0 1.17-0.393t0.455-0.911zM19.411 8.232q0-0.732-0.438-1.179t-1.17-0.446q-0.768 0-1.357 0.455t-0.589 1.17q0 0.696 0.589 1.152t1.357 0.455q0.732 0 1.17-0.438t0.438-1.17zM30.75 17.286q0-0.5-0.464-0.893t-1.161-0.393q-0.482 0-0.884 0.402t-0.402 0.884q0 0.5 0.402 0.902t0.884 0.402q0.696 0 1.161-0.393t0.464-0.911zM26 10.196q-0.554-0.071-1.25-0.071-3.018 0-5.554 1.375t-3.991 3.723-1.455 5.134q0 1.393 0.411 2.714-0.625 0.054-1.214 0.054-0.464 0-0.893-0.027t-0.982-0.116-0.795-0.125-0.973-0.188-0.893-0.188l-4.518 2.268 1.286-3.893q-5.179-3.625-5.179-8.75 0-3.018 1.741-5.554t4.714-3.991 6.491-1.455q3.143 0 5.938 1.179t4.679 3.259 2.438 4.652zM36.571 20.214q0 2.089-1.223 3.991t-3.313 3.455l0.982 3.232-3.554-1.946q-2.679 0.661-3.893 0.661-3.018 0-5.554-1.259t-3.991-3.42-1.455-4.714 1.455-4.714 3.991-3.42 5.554-1.259q2.875 0 5.411 1.259t4.063 3.429 1.527 4.705z"></path>
        </symbol>
        <symbol id="icon-viber" viewBox="0 0 27 32">
            <title>viber</title>
            <path d="M22.857 21.304q0-0.196-0.036-0.286-0.054-0.143-0.688-0.527t-1.58-0.884l-0.946-0.518q-0.089-0.054-0.339-0.232t-0.446-0.268-0.375-0.089q-0.321 0-0.839 0.58t-1.018 1.17-0.786 0.589q-0.125 0-0.295-0.063t-0.277-0.116-0.304-0.17-0.25-0.152q-1.768-0.982-3.045-2.259t-2.259-3.045q-0.036-0.054-0.152-0.25t-0.17-0.304-0.116-0.277-0.063-0.295q0-0.232 0.366-0.598t0.804-0.688 0.804-0.705 0.366-0.652q0-0.179-0.089-0.375t-0.268-0.446-0.232-0.339q-0.054-0.107-0.268-0.509t-0.446-0.813-0.473-0.848-0.446-0.723-0.295-0.321-0.286-0.036q-0.857 0-1.804 0.393-0.821 0.375-1.429 1.688t-0.607 2.33q0 0.286 0.045 0.607t0.089 0.545 0.161 0.589 0.179 0.527 0.223 0.589 0.196 0.536q1.071 2.929 3.866 5.723t5.723 3.866q0.107 0.036 0.536 0.196t0.589 0.223 0.527 0.179 0.589 0.161 0.545 0.089 0.607 0.045q1.018 0 2.33-0.607t1.688-1.429q0.393-0.946 0.393-1.804zM27.429 7.429v17.143q0 2.125-1.509 3.634t-3.634 1.509h-17.143q-2.125 0-3.634-1.509t-1.509-3.634v-17.143q0-2.125 1.509-3.634t3.634-1.509h17.143q2.125 0 3.634 1.509t1.509 3.634z"></path>
        </symbol>
        <symbol id="icon-skype" viewBox="0 0 24 24">
            <title>skype</title>
            <path d="M8.865 5c0.751 0 1.44 0.202 2.069 0.609 0.324-0.080 0.711-0.121 1.157-0.121 1.846 0 3.418 0.67 4.717 2.008 1.299 1.339 1.948 2.962 1.948 4.87 0 0.466-0.051 0.953-0.152 1.461 0.264 0.589 0.396 1.187 0.396 1.794 0 1.097-0.38 2.036-1.142 2.815-0.761 0.781-1.668 1.173-2.725 1.173-0.629 0-1.237-0.162-1.825-0.488-0.527 0.081-0.933 0.122-1.217 0.122-1.847 0-3.425-0.67-4.733-2.009s-1.963-2.962-1.963-4.868c0-0.447 0.051-0.902 0.152-1.37-0.364-0.609-0.547-1.288-0.547-2.039 0-1.096 0.376-2.029 1.126-2.799 0.75-0.772 1.664-1.158 2.739-1.158zM12 15.53c-0.406 0-0.729-0.061-0.975-0.183-0.263-0.142-0.445-0.284-0.547-0.425-0.243-0.447-0.376-0.681-0.396-0.7-0.081-0.243-0.202-0.447-0.364-0.609-0.203-0.14-0.406-0.213-0.61-0.213-0.284 0-0.517 0.091-0.7 0.274-0.183 0.182-0.274 0.396-0.274 0.639 0 0.386 0.144 0.801 0.428 1.248 0.263 0.405 0.629 0.741 1.096 1.003 0.648 0.346 1.45 0.519 2.404 0.519 0.79 0 1.49-0.122 2.1-0.365 0.609-0.284 1.055-0.639 1.339-1.065 0.304-0.467 0.456-0.975 0.456-1.522 0-0.445-0.080-0.852-0.242-1.217-0.163-0.304-0.416-0.578-0.762-0.82-0.365-0.225-0.75-0.407-1.156-0.548-0.689-0.204-1.178-0.336-1.461-0.396-0.143-0.021-0.32-0.055-0.533-0.107-0.213-0.050-0.35-0.085-0.41-0.106-0.243-0.080-0.416-0.152-0.518-0.212-0.163-0.081-0.294-0.193-0.396-0.336-0.103-0.1-0.152-0.233-0.152-0.396 0-0.243 0.142-0.455 0.426-0.639 0.265-0.203 0.649-0.305 1.156-0.305 0.508 0 0.884 0.092 1.127 0.273 0.263 0.225 0.456 0.478 0.577 0.762 0.163 0.264 0.295 0.446 0.396 0.547 0.162 0.123 0.355 0.184 0.578 0.184 0.264 0 0.498-0.102 0.699-0.306 0.184-0.181 0.275-0.404 0.275-0.669 0-0.202-0.072-0.467-0.214-0.791-0.162-0.243-0.376-0.486-0.639-0.729-0.284-0.224-0.659-0.417-1.127-0.579-0.485-0.143-1.004-0.213-1.552-0.213-0.73 0-1.38 0.11-1.948 0.335-0.566 0.2-1.003 0.505-1.307 0.911-0.305 0.406-0.457 0.872-0.457 1.4 0 0.527 0.143 0.984 0.426 1.37 0.346 0.405 0.73 0.688 1.156 0.851 0.488 0.224 1.076 0.407 1.766 0.548 0.121 0.021 0.27 0.056 0.441 0.106 0.172 0.052 0.324 0.092 0.457 0.123 0.131 0.028 0.238 0.055 0.319 0.075 0.284 0.103 0.517 0.243 0.699 0.427 0.183 0.141 0.274 0.354 0.274 0.639 0 0.346-0.162 0.629-0.486 0.853-0.364 0.243-0.821 0.364-1.369 0.364zM8.865 3c-1.609 0-3.053 0.61-4.174 1.765-1.105 1.134-1.691 2.585-1.691 4.192 0 0.832 0.156 1.619 0.466 2.348-0.047 0.357-0.070 0.713-0.070 1.062 0 2.438 0.853 4.547 2.532 6.267 1.693 1.732 3.768 2.61 6.164 2.61 0.254 0 0.547-0.020 0.896-0.060 0.69 0.283 1.409 0.426 2.146 0.426 1.588 0 3.025-0.614 4.157-1.777 1.117-1.143 1.709-2.6 1.709-4.211 0-0.677-0.111-1.349-0.332-2.004 0.059-0.427 0.089-0.846 0.089-1.251 0-2.437-0.846-4.544-2.513-6.263-1.685-1.735-3.755-2.615-6.152-2.615-0.279 0-0.546 0.013-0.801 0.038-0.756-0.35-1.568-0.527-2.426-0.527z"></path>
        </symbol>
        <symbol id="icon-mail" viewBox="0 0 32 32">
            <title>mail</title>
            <path d="M20.638 20h-8.332l2.244 1.98 2.267 0.011-1.697 0.009h3.378l0.020-0.018-0.099 0.001 2.218-1.983zM21.757 19l3.243-2.9v-8.091c0-0.557-0.455-1.009-1-1.009h-15c-0.552 0-1 0.444-1 1.002v8.198l3.173 2.8h10.583zM13.091 6l3.409-3 3.409 3h4.093c1.107 0 1.997 0.895 1.997 2v3.36l3 2.64v14.006c0 1.1-0.897 1.994-2.004 1.994h-20.993c-1.114 0-2.004-0.893-2.004-1.994v-14.006l3-2.64v-3.36c0-1.112 0.894-2 1.997-2h4.093zM18.428 6l-1.928-1.7-1.928 1.7h3.856zM26 12.677v2.656l1.5-1.333-1.5-1.323zM7 15.333v-2.656l-1.5 1.323 1.5 1.333zM13.5 23l-7 6h20l-7-6h-6zM27.685 28.725v0 0c0.194-0.183 0.315-0.442 0.315-0.725v-13l-8 7.017 7.685 6.708zM5.315 28.725l7.685-6.708-8-7.017v13c0 0.283 0.121 0.542 0.315 0.725v0 0zM10 10v1h13v-1h-13zM10 13v1h13v-1h-13zM10 16v1h13v-1h-13z"></path>
        </symbol>
        <symbol id="icon-telegram" viewBox="0 0 32 32">
            <title>telegram</title>
            <path d="M16 0c-8.838 0-16 7.162-16 16s7.162 16 16 16 16-7.163 16-16-7.163-16-16-16zM23.863 10.969l-2.625 12.369c-0.181 0.881-0.712 1.087-1.45 0.681l-4-2.956-1.919 1.869c-0.225 0.219-0.4 0.4-0.8 0.4-0.519 0-0.431-0.194-0.606-0.688l-1.363-4.475-3.956-1.231c-0.856-0.262-0.862-0.85 0.194-1.269l15.412-5.95c0.7-0.319 1.381 0.169 1.113 1.25z"></path>
        </symbol>
    </defs>
</svg>

<div class="site-index">
    <div class="bg_move_wrapper">
        <div class="bg_move">
            <video muted autoplay="autoplay"  style="width:100%;" loop="loop" id="banner-bg-video">
                <source src="<?= Url::to('../video/main-bg.mp4')?>" type="video/mp4" />
                <source src="<?= Url::to('../video/main-bg.webm')?>" type="video/webm" />
                <source src="<?= Url::to('../video/main-bg.ogv')?>" type="video/ogg" />
            </video>
        </div>

        <div class="banner__text">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="banner__title">SUCCESSFUL BOOKING AGENCY</h1>
                    <p><?= \Yii::t('general', 'Be successful with us!')?></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        if(window.innerWidth / window.innerHeight < 1.77){
            $('.bg_move video').attr('style', 'height:100%;');
        }
    </script>

    <div class="body-content">
        <section class="we-are section tac position-menu">

            <div class="we-are__btn" id="we-are">
                <a href="#we-are">
                    <img src="<?= Url::to('../img/banner-btn.png')?>" alt="button">
                </a>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="we-are__title animate_index-1"><?= \Yii::t('general', 'We are the first international booking agency that provides work abroad for artists of different genres and staff for hotel industry.')?></h2>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <nav class="cl-effect-7">
                                    <a href="<?= Url::to('looking-for-a-job')?>"><?= \Yii::t('general', 'Looking for a job')?></a>
                                </nav>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <nav class="cl-effect-7">
                                    <a href="<?= Url::to('looking-for-artists')?>"><?= \Yii::t('general', 'Looking for artists')?></a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="light-g advantages section tac">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="advantages">
                            <div class="icon-wrapper">
                                <svg class="icon-gray animate_index-2">
                                    <use xlink:href="#icon-guest"></use>
                                </svg>
                            </div>
                            <p><?= \Yii::t('general', 'We gained great experience abroad as artists.')?></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="advantages">
                            <div class="icon-wrapper">
                                <svg class="icon-gray animate_index-2">
                                    <use xlink:href="#icon-bubbles"></use>
                                </svg>
                            </div>
                            <p><?= \Yii::t('general', 'We provide contracts, considering all your wishes.')?></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="advantages">
                            <div class="icon-wrapper">
                                <svg class="icon-gray animate_index-2">
                                    <use xlink:href="#icon-umbrella"></use>
                                </svg>
                            </div>
                            <p><?= \Yii::t('general', 'We cooperate only with well-tried proven artists and employers.')?></p>
                        </div>
                    </div>
<!--                    <div class="col-md-3 col-sm-6 col-xs-12">-->
<!--                        <div class="advantages">-->
<!--                            <div class="icon-wrapper">-->
<!--                                <svg class="icon-gray">-->
<!--                                    <use xlink:href="#icon-like"></use>-->
<!--                                </svg>-->
<!--                            </div>-->
<!--                            <p>--><?//= \Yii::t('general', 'We are the first booking agency in the CIS countries. We are engaged in the official employment of artists, organization of concerts and show-programs.')?><!--</p>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </section>

        <section class="section good parallax-window tac" data-parallax="scroll" data-image-src="<?= Url::to('../img/background/good.jpg')?>">
            <div class="bg_dark">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">                            
                            <h2>
                                <?= \Yii::t('general', 'WE ARE INTERESTED IN LONG AND PRODUCTIVE COOPERATION WITH EACH ARTIST AND EMPLOYER, BECAUSE<br> WE SUCCESSFUL BOOKING AGENCY.')?>
                            </h2>
                            <p>
                                <?= \Yii::t('general', 'For that reason we have developed perfect sequence of actions and we have complete control over the entire period of the artist and is constantly in contact with the employer.')?>
                            </p>                                                    
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="socials light-g section tac oh">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                         <h2 class="socials__title"><?= \Yii::t('general', 'BE THE FIRST WHO WILL FIND OUT ABOUT ALL OPEN VACANCIES')?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <a class="icon-wrapper" href="https://www.facebook.com/groups/sba.world/" target="_blank">
                            <svg class="icon-gray animate_index-4">
                                <use xlink:href="#icon-facebook"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <a class="icon-wrapper" href="https://www.instagram.com/sba_world/" target="_blank">
                            <svg class="icon-gray animate_index-5">
                                <use xlink:href="#icon-instagram"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <a class="icon-wrapper" href="http://vk.com/sba.world" target="_blank">
                            <svg class="icon-gray animate_index-4">
                                <use xlink:href="#icon-vk"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <a class="icon-wrapper" href="https://www.youtube.com/channel/UCX-A-9l-b-HVk4MpDKu595Q" target="_blank">
                            <svg class="icon-gray animate_index-5">
                                <use xlink:href="#icon-youtube"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section good parallax-window your-success oh" data-parallax="scroll" data-image-src="<?= Url::to('../img/background/good.jpg')?>">
            <div class="bg_dark">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 tac animate_index-3">
                            <h2><?= \Yii::t('general', 'YOUR SUCCESS IS IMPORTANT FOR US')?></h2>
                            <p><?= \Yii::t('general', 'Do you want to develop, to travel and to earn?')?></p>
                            <p><?= \Yii::t('general', 'Do you want to find a reliable partner?')?></p>
                            <p><?= \Yii::t('general', 'We conclude contracts only on the most favorable terms, which allows us to maintain constant cooperation with the artist and the employer.')?></p>
                        </div>
<!--                        <div class="col-sm-6 your-success__column animate_index-3">-->
<!--                            <h2>--><?//= \Yii::t('general', 'YOUR SUCCESS IS IMPORTANT FOR US')?><!--</h2>-->
<!--                            <p>--><?//= \Yii::t('general', 'Do you want to develop, to travel and to earn?')?><!--</p>-->
<!--                            <p>--><?//= \Yii::t('general', 'Do you want to find a reliable partner?')?><!--</p>-->
<!--                            <p>--><?//= \Yii::t('general', 'We conclude contracts only on the most favorable terms, which allows us to maintain constant cooperation with the artist and the employer.')?><!--</p>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </section>

<!--        <section class="your-success section oh">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-sm-7"></div>-->
<!--                    <div class="col-sm-5 your-success__column animate_index-3">-->
<!--                        <h2>--><?//= \Yii::t('general', 'YOUR SUCCESS IS IMPORTANT FOR US')?><!--</h2>-->
<!--                        <p>--><?//= \Yii::t('general', 'Do you want to develop, to travel and to earn?')?><!--</p>-->
<!--                        <p>--><?//= \Yii::t('general', 'Do you want to find a reliable partner?')?><!--</p>-->
<!--                        <p>--><?//= \Yii::t('general', 'We conclude contracts only on the most favorable terms, which allows us to maintain constant cooperation with the artist and the employer.')?><!--</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->

<!--        <section class="socials section tac">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-xs-12">-->
<!--                        <h2 class="socials__title">--><?//= \Yii::t('general', 'WE ARE ALWAYS AVAILABLE 24/7')?><!--</h2>-->
<!--                        <p class="socials__title">--><?//= \Yii::t('general', 'Cooperating with us, a personal assistant assigned to You.')?>
<!--                            <br>--><?//= \Yii::t('general', 'You can contact him and ask any question at any time, in any convenient manner For you.')?>
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-1-5 col-sm-4 col-xs-12">-->
<!--                        <a class="icon-wrapper" href="tel:+380973818744" target="_blank">-->
<!--                            <svg class="icon-gray">-->
<!--                                <use xlink:href="#icon-whatsapp"></use>-->
<!--                            </svg>-->
<!--                            <h3>WhatsApp</h3>-->
<!--                            <p>+38 097 3818 744</p>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="col-lg-1-5 col-sm-4 col-xs-12">-->
<!--                        <a class="icon-wrapper" href="tel:+380973818744" target="_blank">-->
<!--                            <svg class="icon-gray">-->
<!--                                <use xlink:href="#icon-viber"></use>-->
<!--                            </svg>-->
<!--                            <h3>Viber</h3>-->
<!--                            <p>+38 097 3818 744</p>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="col-lg-1-5 col-sm-4 col-xs-12">-->
<!--                        <a class="icon-wrapper" href="tel:+380973818744" target="_blank">-->
<!--                            <svg class="icon-gray">-->
<!--                                <use xlink:href="#icon-wechat"></use>-->
<!--                            </svg>-->
<!--                            <h3>WeChat</h3>-->
<!--                            <p>+38 097 3818 744</p>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="col-lg-1-5 col-sm-6 col-xs-12">-->
<!--                        <a class="icon-wrapper" href="skype:sba.world?call" target="_blank">-->
<!--                            <svg class="icon-gray">-->
<!--                                <use xlink:href="#icon-skype"></use>-->
<!--                            </svg>-->
<!--                            <h3>Skype</h3>-->
<!--                            <p>sba.world</p>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="col-lg-1-5 col-sm-6 col-xs-12">-->
<!--                        <a class="icon-wrapper" href="mailto:info@sba.world" target="_blank">-->
<!--                            <svg class="icon-gray">-->
<!--                                <use xlink:href="#icon-mail"></use>-->
<!--                            </svg>-->
<!--                            <h3>Email</h3>-->
<!--                            <p>info@sba.world</p>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->

        <section class="socials section tac oh">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="socials__title"><?= \Yii::t('general', 'WE ARE ALWAYS AVAILABLE 24/7')?></h2>
                        <p class="socials__title"><?= \Yii::t('general', 'Cooperating with us, a personal assistant assigned to You.')?>
                            <br><?= \Yii::t('general', 'You can contact him and ask any question at any time, in any convenient manner For you.')?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-sm-4 col-xs-12 animate_index-6">
                        <a class="icon-wrapper" href="tel:+380973818744" target="_blank">
                            <svg class="icon-gray">
                                <use xlink:href="#icon-whatsapp"></use>
                            </svg>
                            <h3>WhatsApp</h3>
                            <p>+38 097 3818 744</p>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-xs-12 animate_index-6">
                        <a class="icon-wrapper" href="tel:+380973818744" target="_blank">
                            <svg class="icon-gray">
                                <use xlink:href="#icon-viber"></use>
                            </svg>
                            <h3>Viber</h3>
                            <p>+38 097 3818 744</p>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-xs-12 animate_index-6">
                        <a class="icon-wrapper" href="tel:+380973818744" target="_blank">
                            <svg class="icon-gray">
                                <use xlink:href="#icon-wechat"></use>
                            </svg>
                            <h3>WeChat</h3>
                            <p>+38 097 3818 744</p>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-xs-12 animate_index-7">
                        <a class="icon-wrapper" href="tel:+380973818744" target="_blank">
                            <svg class="icon-gray">
                                <use xlink:href="#icon-telegram"></use>
                            </svg>
                            <h3>Telegram</h3>
                            <p>+38 097 3818 744</p>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-xs-12 animate_index-7">
                        <a class="icon-wrapper" href="skype:sba.world?call" target="_blank">
                            <svg class="icon-gray">
                                <use xlink:href="#icon-skype"></use>
                            </svg>
                            <h3>Skype</h3>
                            <p>sba.world</p>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-xs-12 animate_index-7">
                        <a class="icon-wrapper" href="mailto:info@sba.world" target="_blank">
                            <svg class="icon-gray">
                                <use xlink:href="#icon-mail"></use>
                            </svg>
                            <h3>Email</h3>
                            <p>info@sba.world</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>

