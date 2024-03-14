<div>

    <div class="container  h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div>
                    <div class="card-body px-4 px-md-5">

                        <p class="h1 text-center mt-3 mb-4 pb-3 text-primary">
                            <i class="fas fa-check-square me-1"></i>
                            <u>My Todo-s</u>
                        </p>

                        <!-- include create box -->
                        @include('livewire.todo-list.includes.create-todo-list')
                        <!-- include create box -->

                        <!-- include create box -->
                        @include('livewire.todo-list.includes.todo-filter')
                        <!-- include create box -->

                        <!-- include create box -->
                        @include('livewire.todo-list.includes.todo-card')
                        <!-- include create box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
