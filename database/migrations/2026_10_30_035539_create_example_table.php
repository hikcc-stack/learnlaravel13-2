<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*
     *  Откат миграций в Laravel
     *
     * php artisan migrate:rollback
     * позволяет откатить последнюю отправленную пачку миграций
     *
     * php artisan migrate:rollback --step=5
     * позволяет сделать откат определенного числа миграций,
     * указав параметр step. (step=5 - откат последних пяти миграций
     *
     * php artisan migrate:reset
     * данная команда отменит изменения всех миграций
     * вашего приложения
     *
     * php artisan migrate:refresh
     * позволяет откатить все миграции, а затем выполнит их снова
     *
     * php artisan migrate:fresh
     * удаляет все таблицы и заново запускает миграции
     *
     * php artisan migrate
     * создает миграции
     */

    /*
     * Структура миграций
     *
     *Класс миграции содержит два метода: метод up и метод down. Метод up
     * используется для добавления новых таблиц, столбцов или индексов в вашу базу данных,
     * тогда как метод down, должен отменять операции, выполняемые методом up.
     */

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('example', function (Blueprint $table) {
            $table->id(); // AUTO_INCREMENT UNSIGNED BIGINT(primary key)

            // строковые типы
            $table->string('name');//varchar 255
            $table->string('username', 50)->unique();//varchar(50) c уникальностью.
            $table->string('country_side', 2);//CHAR(2) - тип char с фикс. длиной
            $table->string('description' )->nullable();//TEXT - до 65КБ, может быть пустым(значение null).
            $table->string('bio' )->nullable();//MediumText - до 16МБ, может быть пустым(значение null).
            $table->string('full_profile' )->nullable();//LongText - до 4ГБ, может быть пустым(значение null).


            //числовые типы
            $table->tinyInteger('age');//tinyint - малое число от -128 до 127
            $table->integer('amount');// число int, по умолчанию 0
            $table->bigInteger('count');// число BIGINT
            $table->decimal('price', 8, 2);// используется для денег decimal(8,2), 8 чисел до запятой, 2 числа после запятой
            $table->float('price', 8, 2);// float(8,2), 8 чисел до запятой, 2 числа после запятой
            // если необходимо добавить свойство unsigned
            $table->unsignedInteger('int');

            // дата и время
            $table->date('birth_date'); // DATE - дата
            $table->time('birth_date'); // TIME - дата
            $table->dateTime('birth_date'); // DATETIME - дата и время
            $table->timestamps(); // created_at и updated_at - информация, когда была создана данная таблица и когда была обновлена
            $table->softDeletes(); // deleted_at - информация, когда она была удалена


            // Логические значения
            $table->boolean('is_active')->default(true); // 1 - является
            $table->boolean('is_admin')->default(false); // 2 - не является

            // enum
            $table->enum('is_admin', ['admin', 'moderator', 'user', 'manager'])->default('user');
            // enum -ограничивает значения только перечисленным списком

            $table->foreignId('team_id')->constrained()->onDelete('cascade'); // базовая настройка связи
            // преимущественно будем использовать ее
            // constrained - используется в миграциях для создания внешнего ключа с автоматическим определением целевой таблицы и столбца
            // метод применяется к определению поля foreignId и упрощает создание внешних ключей
            // автоматически определяет таблицу и столбец, на которые ссылается внешний ключ, но основе названия поля
            $table->foreignId('team_id')->constrained()->onDelete('cascade')->onUpdate('cascade'); // update(cascade) - обновление(каскадно)
            // ('set null') - при удалении родительской записи значение внешнего ключа в дочерней устанавливается NULL
            // ('restrict') - блокирует удаление родительской записи, если на нее еще ссылаются элементы
            // ('no action') - оставить без действий
            $table->foreignId(\App\Models\User::class)->constrained(); //nullable() - принимает значения null

            // специальные типы
            $table->rememberToken(); // varchar(100) - токен, для реализации функции "Запомнить меня" при авторизации
            $table->binary('avatar')->nullable(); // BLOB - используется для хранения картинок, файлов, зашифрованных ключей

            // модификаторы полей
            $table->string('name')
                ->nullable() // разрешить значение NULL
                ->default('John') // John - значение по умолчанию
                ->unique() // ДАнное поле имеет уникальное значение
                ->index() // Обычный индекс
                ->primary() // Первичный ключ
                ->after('email') // Ввести после поля email
                ->first() // Ввести первым полем в таблице
                ->comment('Имя пользователя') // комментарий в поле в БД
                ->always() // всегда вычислять
                ->unsigned() // беззнаковое значение (для чисел)
                ->change(); // изменить существующее поле
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // удалить, если существует таблица с данными именем
        Schema::dropIfExists('example');
    }
};
