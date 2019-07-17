<nav id="left-nav" class="ember-view">
  <div class="primary-nav">
    <a href="/" class="brand" title="TradeGecko Home">
      <img
        src="https://d3h6ue1fvxa32i.cloudfront.net/assets/logo/tradegecko-mark-494da39a939cdd8ae8ddff25e888a7ce38c21e929a3f5f867e861784f00b3008.svg"
        class="brand-mark ember-view">
      <img
        src="https://d3h6ue1fvxa32i.cloudfront.net/assets/logo/tradegecko-wordmark-25cba05be5d083854f32f540272c91ce729e88c616ef13d63a9d18d8a136f59e.svg"
        class="brand-wordmark ember-view">
    </a>
    <nav class="navigation-lists">
      <ul class="nav nav-list primary-list">
        <li class="ember-view sidebar-tab active">
          <a id="" href="{{ route('public.home') }}" class="primary-nav-item ember-view active">
            <i class="tg tg-dashboard"></i>
            <span class="nav-label">Dashboard</span>
          </a>
        </li>
        <li class="ember-view sidebar-tab">
          <a id="" href="{{ route('public.inventory') }}" class="primary-nav-item ember-view">
            <i class="tg tg-box"></i>
            <span class="nav-label">Entry</span>
            <span class="right-caret nav-caret fa fa-angle-right"></span>
          </a>
        </li>
        <li id="ember1825" class="ember-view sidebar-tab">
          <a id="companies-index" href="/relationships" class="primary-nav-item ember-view">
            <i class="tg tg-user"></i>
            <span class="nav-label">Relationships</span>
          </a>
        </li>
        <li id="ember1853" class="ember-view sidebar-tab"><a id="orders-index" href="/orders"
            class="primary-nav-item ember-view">
            <i class="tg tg-orders"></i>
            <span class="nav-label">Sales Orders</span>
            <span class="right-caret nav-caret fa fa-angle-right"></span>
          </a>
        </li>
        <li id="ember1884" class="ember-view sidebar-tab">
          <a id="stockControl-index" href="/purchase_orders" class="primary-nav-item ember-view">
            <i class="tg tg-stock-control"></i>
            <span class="nav-label">Stock Control</span>
            <span class="right-caret nav-caret fa fa-angle-right"></span>
          </a>
        </li>
        <li id="ember1903" class="ember-view sidebar-tab">
          <a id="manufacturing-index" href="/manufacturing/splash" class="primary-nav-item ember-view">
            <i class="tg tg-factory"></i>
            <span class="nav-label">Manufacturing</span>
          </a>
        </li>
        <li id="ember1920" class="ember-view sidebar-tab">
          <a id="b2b-index" href="/b2b" class="primary-nav-item ember-view">
            <i class="tg tg-shopping-cart"></i>
            <span class="nav-label">B2B eCommerce</span>
          </a>
        </li>
        <li id="ember1936" class="ember-view sidebar-tab">
          <a id="intelligence-index" href="/intelligence/hub" class="primary-nav-item ember-view">
            <i class="tg tg-reports"></i>
            <span class="nav-label">Intelligence</span>
            <span class="right-caret nav-caret fa fa-angle-right"></span>
          </a>
        </li>
      </ul>

      <ul class="nav nav-list secondary-list">
        <li id="ember1960" class="ember-view sidebar-tab">
          <a id="apps-index" href="/apps" title="Browse Apps" class="primary-nav-item ember-view">
            <i class="tg tg-app-store"></i>
            <span class="nav-label">Browse Apps</span>
          </a>
        </li>
        <li id="ember1986" class="ember-view sidebar-tab">
          <a id="integrations-index" href="/integrations" title="My Apps" class="primary-nav-item ember-view">
            <i class="tg tg-my-apps"></i>
            <span class="nav-label">My Apps</span>
            <span id="ember2017" class="ember-view badge hidden badge-green right"> <i
                class="fa fa-exclamation-triangle"></i>
            </span>
            <span class="right-caret nav-caret fa fa-angle-right"></span>
          </a>
        </li>
        <li id="ember2018" class="ember-view sidebar-tab">
          <a id="account-index" href="/account/overview" title="Settings" class="primary-nav-item ember-view"> <i
              class="tg tg-settings"></i>
            <span class="nav-label">Settings</span>
            <span class="right-caret nav-caret fa fa-angle-right"></span>
          </a>
        </li>
      </ul>
    </nav>
    <ul class="nav nav-list anchor-list inactive">
      <li>
        <a id="ember2042" href="#" class="ember-view">
          <div class="avatar left">
            <img height="32px"
              src="https://d3h6ue1fvxa32i.cloudfront.net/assets/avatars/avatar3-64a186c9b34bc07cced1c926eb1b95588e4e4bd6df3ba020f834ceef56e69130.png"
              alt="Ali Sasoli">
          </div>
          <div class="sidebar-names">
            <div class="user-name">
              Ali Sasoli
            </div>
            <div class="company-name">
              DeadProgram
            </div>
          </div>
          <span class="fa fa-angle-up nav-caret"></span>
        </a>
      </li>
    </ul>
    <ul class="nav nav-list profile-list" style="height: NaNpx">
      <li>
        <a href="/logout" title="Logout">
          <i class="tg tg-power"></i>
          <span class="nav-label">Logout</span>
        </a>
      </li>
    </ul>
  </div>

  <div class="secondary-nav" style="display: none;">
    <span data-nav="products" class="secondary-products hidden">
      <h5>Entry</h5>
      <ul class="nav nav-list mbl">
        <li id="ember2063" class="ember-view secondary-nav-item">
          <a id="ember2064" href="{{ route('public.inventory') }}" class="ember-view">
            <span class="nav-label">Products</span>
          </a>
        </li>
        <li id="ember2066" class="ember-view secondary-nav-item">
          <a id="ember2067" href="{{ route('public.shops')}}" class="ember-view">
            <span class="nav-label">New Shop</span>
          </a>
        </li>
        <li id="ember2085" class="ember-view secondary-nav-item">
          <a id="ember2086" href="/batches" class="ember-view">
            <span class="nav-label">Stock Purchase</span>
          </a>
        </li>
        <li id="ember2106" class="ember-view secondary-nav-item">
          <a id="ember2107" href="/price-lists" class="ember-view">
            <span class="nav-label">Van Entry</span>
          </a>
        </li>
      </ul>
    </span>

    <span data-nav="orders" class="secondary-orders hidden">
      <h5>Sales Orders</h5>
      <ul class="nav nav-list">
        <li id="ember2125" class="ember-view secondary-nav-item">
          <a id="ember2126" href="/orders" class="ember-view">
            <span class="nav-label">Orders</span>
          </a>
        </li>
        <li id="ember2128" class="ember-view secondary-nav-item">
          <a id="ember2129" href="/invoices" class="ember-view">
            <span class="nav-label">Invoices</span>
          </a>
        </li>
        <li id="ember2150" class="ember-view secondary-nav-item">
          <a id="ember2151" href="/shipments" class="ember-view">
            <span class="nav-label">Shipments</span>
          </a>
        </li>
        <li id="ember2176" class="ember-view secondary-nav-item">
          <a id="ember2177" href="/returns" class="ember-view">
            <span class="nav-label">Returns</span>
          </a>
        </li>
      </ul>
    </span>

    <span data-nav="stockControl" class="secondary-stockControl hidden">
      <h5>Stock Control</h5>
      <ul class="nav nav-list">
        <li id="ember2202" class="ember-view secondary-nav-item">
          <a id="ember2203" href="/purchase_orders" class="ember-view">
            <span class="nav-label">Purchase Orders</span>
          </a>
        </li>
        <li id="ember2205" class="ember-view secondary-nav-item">
          <a id="ember2206" href="/stock_transfers" class="ember-view">
            <span class="nav-label">Stock Transfers</span>
          </a>
        </li>
        <li id="ember2224" class="ember-view secondary-nav-item">
          <a id="ember2225" href="/stock_adjustments" class="ember-view">
            <span class="nav-label">Stock Adjustments</span>
          </a>
        </li>
        <li id="ember2243" class="ember-view secondary-nav-item">
          <a id="ember2244" href="/stocktakes" class="ember-view">
            <span class="nav-label">Stocktakes</span>
          </a>
        </li>
      </ul>
    </span>

    <span data-nav="manufacturing" class="secondary-manufacturing hidden">
      <h5>Manufacturing</h5>
      <ul class="nav nav-list">
        <li id="ember2258" class="ember-view secondary-nav-item">
          <a id="ember2259" href="/manufacturing/overview" class="ember-view">
            <span class="nav-label">Overview</span>
          </a>
        </li>
        <li id="ember2269" class="ember-view secondary-nav-item">
          <a id="ember2270" href="/manufacturing/production-orders" class="ember-view">
            <span class="nav-label">Production Orders</span>
          </a>
        </li>
        <li id="ember2288" class="ember-view secondary-nav-item">
          <a id="ember2289" href="/manufacturing/bills-of-materials" class="ember-view">
            <span class="nav-label">Bills of Materials</span>
          </a>
        </li>
      </ul>
    </span>

    <span data-nav="payments" class="secondary-payments hidden">
      <h5>Payments</h5>
      <ul class="nav nav-list">
        <li id="ember2307" class="ember-view secondary-nav-item">
          <a id="ember2308" href="/payments/dashboard" title="Dashboard" class="ember-view">
            <span class="nav-label">Dashboard</span>
          </a>
        </li>
        <li id="ember2340" class="ember-view secondary-nav-item">
          <a id="ember2341" href="/payments/settings" title="Settings" class="ember-view">
            <span class="nav-label">Settings</span>
            <span id="ember2366" class="ember-view badge hidden badge-red right" style="display: none;">
              <i class="fa fa-exclamation-triangle"></i>
            </span>
          </a>
        </li>
      </ul>
    </span>

    <span data-nav="account" class="secondary-account hidden">
      <h5>Settings</h5>
      <ul class="nav nav-list">
        <li id="ember2368" class="ember-view secondary-nav-item">
          <a id="ember2369" href="/account/overview" title="Overview" class="ember-view">
            <span class="nav-label">Overview</span>
          </a>
        </li>
        <li id="ember2371" class="ember-view secondary-nav-item">
          <a id="ember2372" href="/account" title="Company Details" class="ember-view">
            <span class="nav-label">Company Details</span>
          </a>
        </li>
        <li id="ember2382" class="ember-view secondary-nav-item">
          <a id="ember2383" href="/account/defaults" title="Configuration" class="ember-view">
            <span class="nav-label">Configuration</span>
          </a>
        </li>
        <li id="ember2393" class="ember-view secondary-nav-item">
          <a id="ember2394" href="/account/shipping" title="Shipping" class="ember-view">
            <span class="nav-label">Shipping</span>
          </a>
        </li>
        <li id="ember2428" class="ember-view secondary-nav-item">
          <a id="ember2429" href="/account/brands" title="Branding &amp; Documents" class="ember-view"> <span
              class="nav-label">Branding &amp; Documents</span>
          </a>
        </li>
        <li id="ember2458" class="ember-view secondary-nav-item">
          <a id="ember2459" href="/account/email_templates" title="Email Templates" class="ember-view"> <span
              class="nav-label">Email Templates</span>
          </a>
        </li>
        <li id="ember2488" class="ember-view secondary-nav-item">
          <a id="ember2489" href="/account/subscription" title="Plans &amp; Billing" class="ember-view"> <span
              class="nav-label">Plans &amp; Billing</span>
          </a>
        </li>
      </ul>
    </span>

    <span data-nav="intelligence" class="secondary-intelligence hidden">
      <h5>Intelligence</h5>
      <ul class="nav nav-list mbl">
        <li id="ember2535" class="ember-view secondary-nav-item">
          <a id="ember2536" href="/intelligence/hub" class="ember-view">
            <span class="nav-label">Reporting</span>
          </a>
        </li>
        <li id="ember2538" class="ember-view secondary-nav-item">
          <a id="ember2539" href="/forecast" class="ember-view">
            <span class="nav-label">Forecasting</span>
          </a>
        </li>
        <li id="ember2583" class="ember-view secondary-nav-item">
          <a id="ember2584" href="/intelligence/settings" class="ember-view">
            <span class="nav-label">Settings</span>
          </a>
        </li>
      </ul>
    </span>

    <span data-nav="b2b" class="secondary-b2b hidden">
      <h5>B2B eCommerce</h5>
      <ul class="nav nav-list">
        <li id="ember2609" class="ember-view secondary-nav-item">
          <a id="ember2610" href="/b2b/dashboard" title="Dashboard" class="ember-view">
            <span class="nav-label">Dashboard</span>
          </a>
        </li>
        <li id="ember2628" class="ember-view secondary-nav-item">
          <a id="ember2629" href="/b2b/products" title="Products" class="ember-view">
            <span class="nav-label">Products</span>
          </a>
        </li>
        <li id="ember2649" class="ember-view secondary-nav-item">
          <a id="ember2650" href="/b2b/customers" title="Customers" class="ember-view">
            <span class="nav-label">Customers</span>
          </a>
        </li>
        <li id="ember2669" class="ember-view secondary-nav-item">
          <a id="ember2670" href="/b2b/settings" title="Settings" class="ember-view">
            <span class="nav-label">Settings</span>
          </a>
        </li>
      </ul>
    </span>

    <span data-nav="integrations" class="secondary-integrations hidden">
      <h5>My Apps</h5>
      <ul id="ember2708" class="ember-view nav nav-list pbl dropdown-list">
      </ul>
    </span>
  </div>
</nav>