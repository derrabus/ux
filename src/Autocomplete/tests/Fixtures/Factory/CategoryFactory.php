<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\UX\Autocomplete\Tests\Fixtures\Factory;

use Doctrine\ORM\EntityRepository;
use Symfony\UX\Autocomplete\Tests\Fixtures\Entity\Category;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Category>
 *
 * @method static Category|Proxy                   createOne(array $attributes = [])
 * @method static Category[]|Proxy[]               createMany(int $number, array|callable $attributes = [])
 * @method static Category|Proxy                   find(object|array|mixed $criteria)
 * @method static Category|Proxy                   findOrCreate(array $attributes)
 * @method static Category|Proxy                   first(string $sortedField = 'id')
 * @method static Category|Proxy                   last(string $sortedField = 'id')
 * @method static Category|Proxy                   random(array $attributes = [])
 * @method static Category|Proxy                   randomOrCreate(array $attributes = []))
 * @method static Category[]|Proxy[]               all()
 * @method static Category[]|Proxy[]               findBy(array $attributes)
 * @method static Category[]|Proxy[]               randomSet(int $number, array $attributes = []))
 * @method static Category[]|Proxy[]               randomRange(int $min, int $max, array $attributes = []))
 * @method static EntityRepository|RepositoryProxy repository()
 * @method        Category|Proxy                   create(array|callable $attributes = [])
 */
final class CategoryFactory extends ModelFactory
{
    protected function getDefaults(): array
    {
        $name = self::faker()->name();
        return [
            'name' => $name,
            'code' => strtolower(str_replace(' ', '_', $name)),
        ];
    }

    protected function initialize(): self
    {
        return $this;
    }

    protected static function getClass(): string
    {
        return Category::class;
    }
}
