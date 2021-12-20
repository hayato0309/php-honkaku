<?php

declare(strict_types=1);

class Pager
{
    /**
     * 表示したい前レコードのレコード数
     */
    private $count;

    /**
     * 現在ページ番号
     */
    private $currentPage;

    /**
     * １ページあたりのレコード数
     */
    private $limit;

    /**
     * ページング情報の計算結果データ
     */
    private $pager;

    /**
     * コンストラクタ
     * @param int $count 表示したい前レコードのレコード数
     * @param int $currentPage 現在ページ番号
     * @param int $limit 1ページあたりの上限レコード数
     */
    public function __construct(int $count, ?int $currentPage, int $limit)
    {
        if ($count < 0 || $currentPage < 0 || $limit <= 0) {
            throw new InvalidArgumentException('Parameter is invalid.');
        }
        $this->count = $count;
        $this->currentPage = intval($currentPage) === 0 ? 1 : intval($currentPage);
        $this->limit = $limit;
        $this->pager = $this->calculatePage();
    }

    /**
     * ページング情報を計算する
     */
    private function calculatePage(): object
    {
        $isPageExists = $this->count > $this->limit;
        $pager = new stdClass();
        $pager->totalCount = $this->count;
        $pager->currentPage = $this->currentPage;
        $pager->isPageExists = $isPageExists;
        $pager->startPage = 1;
        $pager->endPage = intval(ceil($this->count / $this->limit));
        $pager->hasNext = $this->currentPage < $pager->endPage;
        $pager->hasPrev = $this->currentPage > 1;
        $pager->limit = $this->limit;
        $pager->startIndex = $this->calculateStartIndex();
        $pager->endIndex = $this->calculateEndIndex($pager->endPage);
        return $pager;
    }

    /**
     * 現在ページ上に表示される最初のレコード番号を計算する
     */
    private function calculateStartIndex(): int
    {
        return $this->limit * ($this->currentPage - 1) + 1;
    }

    /**
     *  現在ページ中に表示される最後のレコード番号を計算する
     */
    private function calculateEndIndex(int $endPage): int
    {
        if ($this->currentPage == $endPage) {
            return $this->count;
        }
        return $this->limit * ($this->currentPage - 1) + $this->limit;
    }

    /**
     * $this->pagerのプロパティを取得するために使うマジックメソッド
     */
    public function __get($name)
    {
        return $this->pager->{$name};
    }

    /**
     * ページング情報の計算結果データを全て返す
     */
    public function getAll()
    {
        return $this->pager;
    }
}
