<?php

namespace Filament\Tables\Contracts;

use Filament\Forms\ComponentContainer;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\BulkAction;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

interface HasTable
{
    public function areAllTableRecordsOnCurrentPageSelected(): bool;

    public function areAllTableRecordsSelected(): bool;

    public function callTableColumnAction(string $columnName, string $recordKey);

    public function deselectAllTableRecords(): void;

    public function getAllTableRecordsCount(): int;

    public function getCachedTableAction(string $name): ?Action;

    public function getCachedTableActions(): array;

    public function getCachedTableBulkAction(string $name): ?BulkAction;

    public function getCachedTableBulkActions(): array;

    public function getCachedTableColumns(): array;

    public function getCachedTableFilters(): array;

    public function getFilteredTableQuery(): Builder;

    public function getMountedTableAction(): ?Action;

    public function getMountedTableActionForm(): ComponentContainer;

    public function getMountedTableBulkAction(): ?BulkAction;

    public function getMountedTableBulkActionForm(): ComponentContainer;

    public function getSelectedTableRecordCount(): int;

    public function getTableEmptyStateDescription(): ?string;

    public function getTableEmptyStateHeading(): string;

    public function getTableEmptyStateIcon(): string;

    public function getTableEmptyStateView(): ?View;

    public function getTableFiltersForm(): ComponentContainer;

    public function getTableQuery(): Builder;

    public function getTableRecords(): Collection | LengthAwarePaginator;

    public function getTableRecordsPerPageSelectOptions(): array;

    public function getTableSortColumn(): ?string;

    public function getTableSortDirection(): ?string;

    public function isTableFilterable(): bool;

    public function isTablePaginationEnabled(): bool;

    public function isTableRecordSelected(string $record): bool;

    public function isTableSearchable(): bool;

    public function isTableSelectionEnabled(): bool;
}