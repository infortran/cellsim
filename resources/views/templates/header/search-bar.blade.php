<div class="col align-self-center">
    <!-- Search-Form -->
    <form action="{{ url('/search') }}"  class="js-focus-state">
        <label class="sr-only" for="searchProduct">Search</label>
        <div class="input-group">
            <input type="search" name="query" class="form-control py-2 pl-5 font-size-15 border-0 height-40 rounded-left-pill" id="searchProduct" placeholder="Buscar productos" aria-label="Busca productos" aria-describedby="searchProduct1" required>
            <div class="input-group-append">
                <!-- Select -->
                <!--select class="js-select selectpicker dropdown-select custom-search-categories-select"
                        data-style="btn height-40 text-gray-60 font-weight-normal border-0 rounded-0 bg-white px-5 py-2">
                    <option value="one" selected>All Categories</option>
                    <option value="two">Two</option>
                    <option value="three">Three</option>
                    <option value="four">Four</option>
                </select>
                <!-- End Select -->
                <button class="btn btn-dark height-40 py-2 px-3 rounded-right-pill" type="button" id="searchProduct1">
                    <span class="ec ec-search font-size-24"></span>
                </button>
            </div>
        </div>
    </form>
    <!-- End Search-Form -->
</div>
<div style="width:50px"></div>