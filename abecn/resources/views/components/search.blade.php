<div
    x-data"{
        search: '',

        items: ['foo', 'bar', 'baz'],

        get filteredItems() {
            return this.items.filter(
                i  i.startsWith(this.search)
            )
        }
    }"
>
    <input class="search" x-model="search" placeholder="Search...">

    <ul>
        <!-- <template x-for="item in filteredItems" :key="item"> -->
            <li x-text="item"></li>
        </template>
    </ul>
</div>