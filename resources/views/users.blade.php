<div id="surliest"
     class="overflow-x-auto bg-white border border-gray-200 shadow-md dark:bg-neutral-700">
    <!-- Table -->
    <table class="min-w-full text-left text-xs whitespace-nowrap">

        <!-- Table head -->
        <thead class="uppercase tracking-wider border-b-2 dark:border-neutral-600 border-t">
        <tr>
            <th scope="col" class="px-6 py-6 border-x text-center dark:border-neutral-600">
                №
            </th>
            <th scope="col" class="px-6 py-6 border-x text-center dark:border-neutral-600">
                Имя
            </th>
            <th scope="col" class="px-6 py-6 border-x text-center dark:border-neutral-600">
                почта
            </th>
            <th scope="col" class="px-6 py-6 border-x text-center dark:border-neutral-600">
                Статус
            </th>
            <th scope="col" class="px-6 py-6 border-x text-center dark:border-neutral-600">
                Редактировать
            </th>
        </tr>
        </thead>

        <!-- Table body -->
        <tbody>
        @foreach($users as $key => $user)
            <tr class="border-b dark:border-neutral-600 user_item">
                <th scope="row" class="px-6 py-6 text-center border-x dark:border-neutral-600 user_id">
                    {{$user->id}}
                </th>
                <td class="px-6 py-6 border-x dark:border-neutral-600 user_name">{{$user->name}}</td>
                <td class="px-6 py-6 border-x dark:border-neutral-600 user_email">{{$user->email}}</td>
                <td class="px-6 py-6 border-x dark:border-neutral-600">
                    <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem] flex justify-center">
                        <form method="post" action="/dashboard/surliest">
                            <select class="role" data-te-select-init>
                                @if($user->role[0]->role == "user")
                                    <option value="user">Пользователь</option>
                                    <option value="administrator">Администратор</option>
                                    <option value="moderator">Модератор</option>
                                @elseif($user->role[0]->role == "moderator")
                                    <option value="moderator">Модератор</option>
                                    <option value="administrator">Администратор</option
                                    <option value="user">Пользователь</option>
                                @elseif($user->role[0]->role == "administrator")
                                    <option value="administrator">Администратор</option>
                                    <option value="moderator">Модератор</option>
                                    <option value="user">Пользователь</option>
                                @endif

                            </select>
                        </form>

                    </div>
                </td>
                <td>
                    <div class="flex justify-center gap-1">
                        <div class="cursor-pointer hover:text-pink-950 remove">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                 fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path
                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                            </svg>
                        </div>
                    </div>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div id="remove" class="absolute m-auto left-0 right-0 top-0 bottom-0 hidden ">

</div>
