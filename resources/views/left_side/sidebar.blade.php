<nav id="sidebar" class="nav-sidebar">
    <ul class="list-unstyled components" id="accordion">
        <li>
            <a href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin" class="wave-effect active"><i
                    class="fa fa-home mr-2"></i>Dashboard</a>
        </li>
        <li>
            <a href="#order" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false"><i
                    class="fas fa-hand-holding-usd"></i>Company</a>
            <ul class="collapse list-unstyled" id="order" data-parent="#accordion">
                <li>
                    <a href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/orders">
                        Company </a>
                </li>
                <li>
                    <a href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/orders/pending">
                        Branch</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="#menu2" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
                <i class="icofont-cart"></i>Packages
            </a>
            <ul class="collapse list-unstyled" id="menu2" data-parent="#accordion">
                <li>
                    <a href="{{ url('efris/packages/view') }}"><span>Package
                            Types
                        </span></a>
                </li>
                <li>
                    <a href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/products"><span>
                            Products</span></a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#affiliateprod" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
                <i class="icofont-cart"></i>Users
            </a>
            <ul class="collapse list-unstyled" id="affiliateprod" data-parent="#accordion">
                <li>
                    <a href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/products/import/create"><span>Add
                            Affiliate Product</span></a>
                </li>
                <li>
                    <a href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/products/import/index"><span>All
                            Affiliate Products</span></a>
                </li>
            </ul>
        </li>

        <li>
            <a href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/subscription"
                class=" wave-effect"><i class="fas fa-dollar-sign"></i>Vendor Subscription Plans</a>
        </li>

    </ul>
</nav>
